<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class UserController extends Controller
{
	public function update($id)
	{
		$data = DB::table('users')->where('id',$id)->get()->first();
		return view('front.customer.update_customer',compact('data'));

	}
	public function store($id)
	{
		$data = Request()->validate([
			'full_name' => '',
			'name' => '',
			'age' => '',
			'sex' => '',
			'phone_no' => '',
			'address' => '',
			'profile_image' => '',

		]);
		$a['updated_at'] = Carbon::now('Asia/Kathmandu');
		if(isset(Request()->profile_image))
		{
			$file = Request()->profile_image;
			$filename = time().$file->getClientOriginalName();
			$destination = public_path('uploads/customer/profile');
			$file->move($destination,$filename);
			$a['profile_image'] = $filename;
		}
		$merge = array_merge($data,$a);
		DB::table('users')->where('id',$id)->update($merge);
		return redirect()->back();
	}
}
