<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryReguest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('dashboard.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories=Category::where('parent_id',null)->get();
        return view('dashboard.category.create',['categories'=>$categories,'category'=>new Category()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryReguest $request)
    {
        //
       
        Category::create($request->validated());

        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
      
        return view('dashboard.category.show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        $categories = Category::where('parent_id', null)->where('id', '!=', $category->id)->get();
        return view('dashboard.category.edit', compact('category', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
       
        $updated = $category->update($request->validated());
        if($updated){
            return redirect()->route('dashboard.categories.index')->with('success', 'Category updated successfully.');
          
        }
         return back()->withErrors('Failed to update the category. Please try again.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('dashboard.categories.index');
    }
}
