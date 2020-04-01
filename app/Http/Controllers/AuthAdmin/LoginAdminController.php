<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Admin;

class LoginAdminController extends Controller
{
    

    public function index()
    {
    	return View('superAdmin.login');
    }

    public function login()
    {
    	$validate = request()->validate([

    		"email" => 'required|email',
    		"password" => 'required|min:6',

    	]);

    	$userdata = Admin::where('email', $validate['email']);
        $user = $userdata->first();
            

        if($user != null)
        {

            if(password_verify($validate['password'], $user->password))
            {
                auth()->login($user);
                echo "Admin"; 
                // return redirect()->route('account')->with(
                //     ['success' => $user->firstname.', Bienvenue sur votre Compte']
                // );
            }
            else{
                return redirect()->back()->with('error','Mot de passe ou email incorrect');
            }
		}
        else
        {
            return redirect()->back()->withErrors($validate);
        }
    }
    
}
