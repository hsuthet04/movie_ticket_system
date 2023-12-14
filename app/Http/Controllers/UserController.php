<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //show register form
    public function create()
    {
        return view('user.register');
    }

    //create new user
    public function store(Request $request)
    {
        $form = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required', 'numeric', 'min:10'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);
        //hash password
        $form['password'] = bcrypt($form['password']);

        //create user
        $user = User::create($form);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'Register Successfully');
    }
    //login form
    public function login()
    {
        return view('user.login');
    }
    //to authenticate
    public function authenticate(Request $request)
    {
        $form = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (auth()->attempt($form)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'YOu have been Login!');
        }
        return back()->withErrors(['email'=>'Invaild Credentails'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logout!');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
