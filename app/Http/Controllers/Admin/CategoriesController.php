<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function abort;
use function redirect;
use function view;

class CategoriesController extends Controller {
    public function index() {
        $categories = Category::all();
        return view('admin.Categories.categories', ['categories' => $categories]);
    }

    public function create() {
        return view('admin.Categories.add_category');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
        ]);

        $request = $request->except('_token');

         Category::create($request);

        return redirect()->route('admin.categories')->with(['status' => 'success', 'message' => 'Category Added Successfully']);
    }

    public function destroy($id) {
        $category = Category::find($id);

        if (!$category) {
            abort(404);
        }
        $category->delete();

        return redirect()->route('admin.categories')->with(['status' => 'success', 'message' => 'Category Deleted Successfully']);
    }
}
