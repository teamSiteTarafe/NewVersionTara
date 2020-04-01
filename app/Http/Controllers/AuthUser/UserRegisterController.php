<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserRegisterController extends Controller
{
    public function index()
    {
    	return View('auth.register');
    }

    public function register()
    {

    	$validate = request()->validate([

    		'firstname' => 'required|min:2',
    		'lastname' => 'required|min:3',
    		'number' => 'required|min:8',
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    		'password_confirmation' => 'same:password',
    	]);

    	if($validate){

    		$create = User::create([

    			'firstname' => $validate['firstname'],
    			'lastname' => $validate['lastname'],
    			'phone' => $validate['number'],
    			'email' => $validate['email'],
    			'password' => bcrypt($validate['password']), //bcrypt

    		]);

    		$create->save();

    		if($create)
    		{
    			return redirect()->route('login.user')->with('succes','Inscription effectuée avec succès');
    		}
    	}

    }
}
