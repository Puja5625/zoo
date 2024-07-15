<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginVisitor(){
        return view('login/visitorlogin');
    }
    function loginSponsor(){
        return view('login/sponsorlogin');
    }

   
   
}
