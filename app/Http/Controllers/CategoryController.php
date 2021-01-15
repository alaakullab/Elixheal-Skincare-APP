<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::latest()->get());
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
