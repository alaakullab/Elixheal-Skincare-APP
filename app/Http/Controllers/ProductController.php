<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
//        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView(Request $request)
    {        $items = product::latest();

        if ($request->filled('search'))
            $items->where('product_title', 'like', "%$request->search%");
        $items = $items->paginate(10);
        return view('admin.product.home')->with(['items'=>$items]);
    }
    public function editView($local,$id )
    {
        $data['item'] = product::where('id',$id)->first();

        $data['categories'] = Category::all();

        return view('admin.product.edit')->with($data);
    }
    public function createView()
    {
        $data['categories'] = Category::all();
        return view('admin.product.create')->with($data);
    }
    public function storeView(ProductRequest $request)
    {
        $data = $request->validated();
        $data['language_id'] = getLangId();
        $data['user_id'] = auth()->id();
        $data['status'] = $request->status ? 1 : 0;

        product::create($data);
        return back();
    }
    public function updateView(ProductRequest $request,$local,$id  )
    {
        $data = $request->validated();
        $data['language_id'] = getLangId();
        $data['status'] = $request->status ? 1 : 0 ;
//        dd($data);
        $product= product::find($id);
        $product->update($data);
        return back();
    }
    public function deleteView(Request $request,$local,$id  )
    {
        $product= product::find($id);
        $product->delete();
        return back();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
