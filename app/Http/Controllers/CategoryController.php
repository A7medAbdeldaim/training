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
            'name' => 'required|string',
            'type' => 'required|integer|in:0,1'
        ]);

        Category::create($request->only('name') + $request->only('type'));

        return redirect()->route('admin.categories.all')->with(['status' => 'success', 'message' => 'Category Added Successfully']);
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.Categories.edit_category', compact('category'));
    }

    public function update(Request $request, $id) {
        $category = Category::find($id);

        if (!$category) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string',
            'type' => 'required|integer|in:0,1'
        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.all')->with(['status' => 'success', 'message' => 'Category Edited Successfully']);
    }

    public function destroy($id) {
        $category = Category::find($id);

        if (!$category) {
            abort(404);
        }
        $category->delete();

        return redirect()->route('admin.categories.all')->with(['status' => 'success', 'message' => 'Category Deleted Successfully']);
    }
}
