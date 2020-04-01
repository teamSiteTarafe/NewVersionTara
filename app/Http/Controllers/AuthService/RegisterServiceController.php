<?php

namespace App\Http\Controllers\AuthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterServiceController extends Controller
{
    

    public function index()
    {
    	return View('service.register-service');
    }

    public function register()
    {
    	return "";
    }

}
