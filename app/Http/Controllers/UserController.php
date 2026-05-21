<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserDetail;

class UserController extends Controller
{
    // Show form
    public function index()
    {
        return view('register');
    }

    // Store user
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_details,email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = UserDetail::create($request->all());

        return view('success', compact('user'));
    }

    // Search user
    public function search(Request $request)
    {
        $user = UserDetail::where('email', $request->email)->first();

        return view('search', compact('user'));
    }

    // Delete user
    public function delete($id)
    {
        UserDetail::find($id)->delete();

        return redirect('/')->with('message', 'User Deleted Successfully');
    }
}
