<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController

class AdminControllerr extends Controller
{
    public function index()
    {
    	return view('admin_login');
    }
}
