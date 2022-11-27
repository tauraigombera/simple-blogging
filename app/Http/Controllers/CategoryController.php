<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        return view('posts.categories.index', [
            'categories' => Category::get()
        ]);
    }

    public function create(){
        return view ('posts.categories.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'slug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        Category::create($attributes);

        return redirect('admin/categories')->with('success', 'Category Created');
    }

    public function edit(Category $category)
    {
        return view('posts.categories.edit', ['category' => $category],);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category->id)]
        ]);

        $category->update($attributes);

        return redirect('admin/categories')->with('success', 'Category Updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category Deleted');
    }
}
