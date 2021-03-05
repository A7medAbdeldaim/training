<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index() {
        $data = Category::all();
        return view('admin.Categories.categories', compact('data'));
    }

    public function get() {
        $data = Category::all();
        return view('admin.Categories.categories', compact('data'));
    }

    public function create() {
        $data = Category::all();
        return view('admin.Categories.add_category', compact('data'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string'
        ]);

        Category::create($request->only('name'));

        return redirect()->route('admin.categories.all')->with(['status' => 'success', 'message' => 'Category Added Successfully']);
    }
}