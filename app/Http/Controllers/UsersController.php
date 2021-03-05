<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller {
    public function index() {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function create() {
        return view('admin.add_user');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'admin' => 'required|in:0,1,2',
            'password' => 'required|string|max:255|confirmed',
        ]);

         User::create($request->all());

        return redirect()->route('admin.users')->with(['status' => 'success', 'message' => 'User Added Successfully']);
    }
}
