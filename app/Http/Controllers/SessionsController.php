<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials,$request->has('remember'))) {
           session()->flash('success', 'Welcome Back!');
           return redirect()->route('users.show', [Auth::user()]);
       } else {
           session()->flash('danger', 'Sorry, your login entry does not match our record.');
           return redirect()->back()->withInput();
       }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You have sucessfully logged out!');
        return redirect('login');
    }
}
