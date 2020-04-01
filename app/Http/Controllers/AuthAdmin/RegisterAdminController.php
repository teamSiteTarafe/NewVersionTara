<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Admin;

class RegisterAdminController extends Controller
{
    
    public function index()
    {
    	return View('superAdmin.register');
    }

    public function register()
    {

    	$validate = request()->validate([

    		'firstname' => 'required|min:2',
    		'lastname' => 'required|min:3',
    		'phone' => 'required|min:8',
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    		'password_confirm' => 'same:password',
    	]);

    	if($validate)
    	{
    		$create = Admin::create([
    			'firstname' => $validate['firstname'],
    			'lastname' => $validate['lastname'],
    			'phone' => $validate['phone'],
    			'email' => $validate['email'],
    			'password' => bcrypt($validate['password']),
    		]);

    		$create->save();

    		if($create)
    		{
    			return redirect()->route('login.admin')->with('succes','Inscription effectuée avec succès');
    		}else{
    			return redirect()->back()->with('error','Inscription non effectuée, saisissez bien les données svp');
    		}
    	}else{
    		return redirect()->back()->with('error','Inscription non éffectuée');
    	}

    }

}
