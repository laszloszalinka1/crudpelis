<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class UserController extends Controller
{
    public function store(Request $request)
    {
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->status_id = $request->status_id;
    	$user->role_id = $request->role_id;
    	$user->save();
    	return redirect('user');
    }
     public function index()
	{
		$users = user::all();
		return \View::make('users/list',compact('users'));
	}
	public function create()
	{
		return \View::make('users/new');
	}
	public function update($id, request $request){
		$user = User::find($id);
		$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->status_id = $request->status_id;
    	$user->role_id = $request->role_id;
		$user->save();
		return redirect('user');
	}
	public function show(Request $request){
		$users = User::where('name','like','%'.$request->name.'%')->get();
		return \View::make('users/list',compact('users'));
	}
	public function destroy($id)
	{

		$user = User::find($id);
		$user->delete();
		return redirect()->back();
	}
	public function edit($id){
		$user = User::find($id);
		return \View::make('users/update', compact('user'));
	}
}
