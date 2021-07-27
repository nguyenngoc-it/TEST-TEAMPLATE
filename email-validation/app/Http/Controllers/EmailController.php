<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    function validationEmail(Request $request){
        $email= $request->email;
        $isEmail= true;
        $age = $request->age;
        $isAge = true;
        if(empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $isEmail=false;
        }
        if (empty($age) || $age < 18) {
            $isAge= false;
        }
        return view('index', compact(['isEmail','isAge']));
    }

}
