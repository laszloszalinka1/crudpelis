<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_status as Type_status;
class Type_statusController extends Controller
{
   public function store(Request $request)
    {
    	$type_status = new Type_status;
    	$type_status->name = $request->name;
    	
    	$type_status->save();
    	return redirect('type_status');
    }
     public function index()
	{
		$type_status = Type_status::all();
		return \View::make('type_status/list',compact('type_status'));
	}
	public function create()
	{
		return \View::make('type_status/new');
	}
	public function update($id, request $request){
		$type_status = Type_status::find($id);
		$type_status->name = $request->name;
    	
		$type_status->save();
		return redirect('type_status');
	}
	public function show(Request $request){
		$type_status = type_status::where('name','like','%'.$request->name.'%')->get();
		return \View::make('type_status/list',compact('type_status'));
	}
	public function destroy($id)
	{

		$type_status = Type_status::find($id);
		$type_status->delete();
		return redirect()->back();
	}
	public function edit($id){
		$type_status = Type_status::find($id);
		return \View::make('type_status/update', compact('type_status'));
	}
}
