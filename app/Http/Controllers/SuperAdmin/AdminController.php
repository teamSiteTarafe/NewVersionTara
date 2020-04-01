<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function index()
    {
    	return View('superAdmin.admin');
    }
}
