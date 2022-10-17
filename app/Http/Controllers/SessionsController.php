<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (! auth()->attempt($attributes)){
            return back()
                ->withInput()
                ->withErrors(['password' => 'Invalid email address or password.']);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back');

    }

    public function  destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
