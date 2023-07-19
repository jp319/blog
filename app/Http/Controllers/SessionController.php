<?php

namespace App\Http\Controllers;


use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        // Validate Request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // Attempt to authenticate and log in the user
        // based on the provided credentials
        if (!auth()->attempt($attributes)) {
            // Auth Failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verefied.'
            ]);
        }
        //Protect Against Session Fixation Attack
        session()->regenerate();
        // Redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back!');
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
