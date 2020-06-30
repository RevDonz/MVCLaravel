<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
    	return view('register');
    }

    public function sapa(Request $request) {
    	$fName = $request->input('fName');
    	$lName = $request->input('lName');
    	// return "Halo : " . $fName;
    	return view('welcome', array (
    		'fname' => $fName,
    		'lname' => $lName
    	));
    }
}
