<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Register;

class registercontroller extends Controller
{
   public function getadminRegisterForm(){
       $registers = Register::orderBy('created_at', 'desc')->paginate(9);
       return view('admin.registerform', ['registers' => $registers]);
   }

    public function getregisterform()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
//        $this->validate($request, ['title' => 'required|min:3',
//            'content' => 'required|max:200']);

        $registers = new Register([
            'name' => $request->input('name'),
            'family' => $request->input('family'),
            'age' => $request->input('age'),
            'phonenumber' => $request->input('phonenumber'),
            'phonenumberfamily' => $request->input('phonenumberfamily'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'explain' => $request->input('explain')
        ]);
        $registers->save();
        return redirect()->route('index')->with('info', 'عضویت شما با موفقیت انجام شد.');
    }
    public function getadminregisterdelete($id)
    {
        $register = Register::find($id);
        $register->delete();
        return redirect()->route('admin.registerform')->with('info', 'succsessfully dele');
    }

}
