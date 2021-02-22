<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
//        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    public function index()
    {
        return CategoryResource::collection(Category::latest()->get());
    }
    public function indexView(Request $request)
    {        $items = Category::latest();
        $items->where('language_id', getLangId());
    if ($request->filled('search'))
            $items->where('name', 'like', "$request->search");
        $items = $items->paginate(10);
        return view('admin.category.home')->with(['items'=>$items]);
    }
    public function editView($local,$id )
    {
        $item = Category::where('id',$id)->first();
        return view('admin.category.edit')->with(['item'=>$item]);
    }
    public function createView()
    {
        return view('admin.category.create');
    } public function storeView(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->language_id =  getLangId();
        $category->user_id = auth()->id();
        $category->slug = Str::slug($request->name);
        $category->save();
        return back();
    }
    public function updateView(Request $request,$local,$id  )
    {
        $category= Category::find($id);
        $status = $category->update(
            [
                'name'=> $request->name,
                'slug'=> Str::slug($request->name)
            ]
        );
        if($status){
            toastr()->success(__('admin.update_successful_msg'), __('admin.success'));
           }else
           {
            toastr()->error(__('admin.update_error_msg'), __('admin.error'));
        }
        return back();
    }
    public function deleteView(Request $request,$local,$id  )
    {
        $category= Category::find($id);
        $category->delete();
        return back();
    }

    public function store(Request $request)
    {
        // Category::create($request->all());
        $category = new Category;
        $category->name = $request->name;
        $category->language_id = $request->language_id;
        $category->user_id = $request->user_id;
        $category->slug = Str::slug($request->name);
        $category->save();
        return response('created', 201);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        $category->update(
            [
                'name'=> $request->name,
                'slug'=> Str::slug($request->name)
            ]
            );
        return response('Updated', 202);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response(null, 204);
    }

}
