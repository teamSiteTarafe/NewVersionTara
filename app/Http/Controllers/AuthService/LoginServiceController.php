<?php

namespace App\Http\Controllers\AuthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginServiceController extends Controller
{
    

    public function index()
    {
    	return View('service.login-service');
    }

    public function login()
    {
    	return "";
    }

}
