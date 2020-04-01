<?php

namespace App\Http\Controllers\AuthShop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginShopController extends Controller
{
    

    public function index()
    {
    	return View('shop.login-shop');
    }

    public function login()
    {
    	return "";
    }

}
