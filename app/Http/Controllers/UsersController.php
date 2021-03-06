<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {
    public function index() {
        $users = User::all();
        return view('admin.Users.users', ['users' => $users]);
    }

    public function create() {
        return view('admin.Users.add_user');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'rank' => 'required|in:0,1,2',
            'password' => 'required|string|max:255|confirmed',
        ]);

        $pass = Hash::make($request->get('password'));
        $request = $request->except('password', '_token');

         User::create($request + ['password' => $pass]);

        return redirect()->route('admin.users')->with(['status' => 'success', 'message' => 'User Added Successfully']);
    }
}
