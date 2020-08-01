<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Session;
session_start();

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.add_category');
    }

    public function allCategory()
    {
    	$all_category_info=DB::table('categories')->get();
    	$manage_category=view('admin.all_category')
    		->with('all_category_info', $all_category_info);
    	return view('admin_layout')
    		->with('admin.all_category', $manage_category);

    	//return view('admin.all_category');
    }

    public function saveCategory(Request $request)
    {
    	$data=array();
    	$data['id']=$request->id;
    	$data['name']=$request->name;
    	$data['slug']=$request->slug;
    	$data['banner']=$request->banner;
    	$data['description']=$request->description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('categories')->insert($data);
    	Session::put('message', 'Category added successfully!');
    	return Redirect::to('/add-category');
    }

    public function inactiveCategory($id)
    {
    	DB::table('categories')
	    	->where('id', $id)
	    	->update(['publication_status' => 0]);
	    	Session::put('message', 'Category inactivet successfully!');
	    	return Redirect::to('/all-category');
    }

    public function activeCategory($id)
    {
    	DB::table('categories')
	    	->where('id', $id)
	    	->update(['publication_status' => 1]);
	    	Session::put('message', 'Category activeted successfully!');
	    	return Redirect::to('/all-category');
    }
}
