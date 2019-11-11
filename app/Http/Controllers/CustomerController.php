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

	public function view_customer($id)
	{
		$user = DB::table('users')->where('id',$id)->get()->first();
		return view('admin.customer.customer_info',compact('user'));
	}

}
