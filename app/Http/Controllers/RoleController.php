<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
	public function index()
	{
		$role = DB::table('admins')->get();
		$roles = DB::table('roles')->where('role_name','!=','SuperAdmin')->get();
		return view('admin.Role.view-role',compact('role','roles'));
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

	public function addroleform()
	{
		if(Auth::user()->role == 'SuperAdmin')
		{
		return view('admin.Role.add-role-form');
		}
		else
		{
			return redirect('/pagenotfound');
		}
	}

	public function storerole()
	{

		$data = Request()->validate([
			'role_name' => 'required|unique:roles',
		]);
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);
		DB::table('roles')->insert($merge);
		return redirect()->back();
	}

	public function giveRoleForm()
	{
		if(Auth::user()->role == 'SuperAdmin')
		{
		$role = DB::table('roles')->where('role_name', '!=', 'SuperAdmin')->get();
		return view('admin.Role.give-role-form',compact('role'));
		}
		else
		{
			return redirect('/pagenotfound');
		}

	}

	public function storeGivenRole()
	{
		if(Auth::user()->role == 'SuperAdmin')
		{
		$data = Request()->validate([
			'name' => 'required|unique:admins',
			'email' => 'required|unique:admins',
			'role' => 'required',
			'password' => 'required',
		]);

		$a['password'] = Hash::make(Request()->password);
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$merge = array_merge($data,$a);
		DB::table('admins')->insert($merge);
		return redirect('/admin/viewrole');
		}
		else
		{
			return redirect('/pagenotfound');
		}

	}

}
