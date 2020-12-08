<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status as Status;

class StatusesController extends Controller
{
   public function store(Request $request)
   {
   	$status = new Status;
   	$status->name = $request->name;
   	$status->type_status_id = $request->type_status_id;
   	$status->save();
   	return redirect('statuses');
   }
   public function create()
   {
   	return \View::make('statuses/new');
   }
   public function index()
	{
		$statuses = Status::all();
		return \View::make('statuses/list',compact('statuses'));
	}
	public function destroy($id)
	{

		$statuses = Status::find($id);
		$statuses->delete();
		return redirect()->back();
	}
	public function edit($id){
		$statuses = Status::find($id);
		return \View::make('statuses/update', compact('statuses'));
	}
	public function update($id, request $request){
		$statuses = Status::find($id);
		$statuses->name = $request->name;
		$statuses->type_status_id = $request->type_status_id;
		$statuses->save();
		return redirect('statuses');
	}
	public function show(Request $request){
		$statuses = Status::where('name','like','%'.$request->name.'%')->get();
		return \View::make('statuses/list',compact('statuses'));
	}
}
