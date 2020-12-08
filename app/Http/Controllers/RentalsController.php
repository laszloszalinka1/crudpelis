<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental as Rental;
class RentalsController extends Controller
{
  	public function store(Request $request)
  	{
    $rental = new Rental;
    $rental->start_date = $request->start_date;
    $rental->end_date = $request->end_date;
    $rental->total = $request->total;
    $rental->user_id = $request->user_id;
    $rental->status_id = $request->status_id;
    $rental->save();
    return redirect('rental');
	}
	 public function index()
	{
		$rentals = Rental::all();
		return \View::make('rentals/list',compact('rentals'));
	}
	public function create()
	{
		return \View::make('rentals/new');
	}
	public function update($id, request $request){
		$rental = Rental::find($id);
		 $rental->start_date = $request->start_date;
		 $rental->end_date = $request->end_date;
		 $rental->total = $request->total;
		 $rental->user_id = $request->user_id;
		 $rental->status_id = $request->status_id;

		$rental->save();
		return redirect('rental');
	}
	public function show(Request $request){
		$rentals = Rental::where('name','like','%'.$request->name.'%')->get();
		return \View::make('rental/list',compact('rentals'));
	}
	public function destroy($id)
	{

		$rental = Rental::find($id);
		$rental->delete();
		return redirect()->back();
	}
	public function edit($id){
		$rental = Rental::find($id);
		return \View::make('rentals/update', compact('rental'));
	}
}
