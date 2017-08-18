<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $loginInfo = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($loginInfo)) {
            return redirect()->route('home');
        }        

        return back()->withErrors('Invalid Email/Password combination');
    }

    public function logout()
    {       
        Auth::logout();

        return redirect()
                ->route('sessions.create')
                ->with('mainMessage', 'User logged out successfully');
    }


}
