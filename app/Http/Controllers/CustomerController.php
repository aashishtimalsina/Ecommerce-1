<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
	public function index()
	    {
	    	$customer = DB::table('users')->orderBy('id','desc')->get();
	    	return view('admin.customer.view-customer',compact('customer'));
	    }    

}
