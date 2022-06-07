<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Auth;


class signincontroller extends Controller
{
    public function singin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (Auth::attempt([
            'email' =>$request->input('email'),
            'password' =>$request->input('password')
        ],$request->has('remember'))){
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('fail','Authentication failed');

    }
}
