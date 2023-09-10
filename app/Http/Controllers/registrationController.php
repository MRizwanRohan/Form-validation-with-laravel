<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required | confirmed',
                'password_confirmation' => 'required'
            ]
            );
        echo "<pre>";
        print_r($request->all());
    }
}
