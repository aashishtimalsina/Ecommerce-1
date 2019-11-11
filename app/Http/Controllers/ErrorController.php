<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
	public function pagenotfound()
	{
		return view('errors.404');
	}    
}
