<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
        return view('register');
    }

    // Cara 1
    public function welcome(){
        $fname = request()->fname;
        $lname = request()->lname;
        $p = [
            'fname' => $fname,
            'lname' => $lname
        ];
        return view('welcome',['p'=> $p]);
    }

    // Cara 2
    // public function welcome(Request $request){
    //     $fname = $request->fname;
    //     $lname = $request->lname;
    //     return view('welcome',compact('fname','lname'));
    // }
}
