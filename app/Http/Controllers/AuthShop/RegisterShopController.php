<?php

namespace App\Http\Controllers\AuthShop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterShopController extends Controller
{
    

    public function index()
    {
    	return View('shop.register-shop');
    }

    public function register()
    {
    	return "";
    }
}
