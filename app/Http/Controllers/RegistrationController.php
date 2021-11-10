<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index() {
        return view('Main.index');
    }

    public function testpage(){
        return view('Main.testvalidation');
    } 
}
