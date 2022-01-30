<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')->get();
        return view('category.app', ['category' => $category]);
    }

    public function submit(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        // dd($category);
        $category->save();
        return back()->with('message', 'Category Added Successfully!');
    }

    public function update(Category $category, Request $request)
    {
        $category->name = $request->name;
        // dd($category);
        $category->save();
        return back()->with('message', 'Category Updated Successfully!');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return back()->with('message', 'Category Deleted Successfully!');
    }

    public function view(Category $category)
    {
        return view('list', ['category' => $category]);
    }

    public function apiList()
    {
        $category = DB::table('categories')->select('id', 'name')->get();
        return response()->json($category);
    }
}
