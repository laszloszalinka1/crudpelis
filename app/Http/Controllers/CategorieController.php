<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie as Categorie;

class CategorieController extends Controller
{
    public function store(Request $request)
    {
    	$categorie = new Categorie;
    	$categorie->name = $request->name;
    	$categorie->status_id = $request->status_id;
    	$categorie->save();
    	return redirect('categorie');
    }
     public function index()
	{
		$categories = Categorie::all();
		return \View::make('categories/list',compact('categories'));
	}
	public function create()
	{
		return \View::make('categories/new');
	}
	public function update($id, request $request){
		$categorie = Categorie::find($id);
		$categorie->name = $request->name;
		$categorie->description = $request->description;
		$categorie->save();
		return redirect('categorie');
	}
	public function show(Request $request){
		$categories = Categorie::where('name','like','%'.$request->name.'%')->get();
		return \View::make('categories/list',compact('categories'));
	}
	public function destroy($id)
	{

		$categorie = Categorie::find($id);
		$categorie->delete();
		return redirect()->back();
	}
	public function edit($id){
		$categorie = Categorie::find($id);
		return \View::make('categories/update', compact('categorie'));
	}
}
