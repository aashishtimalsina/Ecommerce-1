<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class RoleController extends Controller
{
	public function index()
	{
		$role = DB::table('admins')->get();

		return view('admin.Role.view-role',compact('role'));
	}

	public function removeRole($id)
	{
		switch (Auth::user()->role) 
		{
			case 'SuperAdmin':
				$admin = DB::table('admins')->where('id',$id)->get()->first();
				if($admin->role != 'SuperAdmin')
				{	
					$change['role'] = NULL; 
					DB::table('admins')->where('id',$id)->update($change);
				}
				else
				{
					return redirect('/errors.404');
				}
				break;
			default:
				return view('errors.404');
				break;
		}

		return redirect('/admin/viewrole');
	}

	public function giveRole($id)
	{
		$give['role'] = Request()->give;
		DB::table('admins')->where('id',$id)->update($give);
		return redirect('admin/viewrole');
	}

}
