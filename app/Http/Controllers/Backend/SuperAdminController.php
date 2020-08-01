<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Session;
session_start();

class SuperAdminController extends Controller
{
    public function superAdmin()
    {
    	//Session::put('admin_name', null);
    	//Session::put('admin_id', null);
    	Session::flush();
    	return Redirect::to('/admin');
    }
}
