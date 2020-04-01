<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserLoginController extends Controller
{
    

    public function index()
    {
    	if(auth()->check())
    	{
    		return redirect()->back();
    	}

    	return View('auth.login');
    }

    public function login()
    {

    	$validate = request()->validate([

    		"email" => 'required|email',
    		"password" => 'required|min:6',

    	]);

    	$userdata = User::where('email', $validate['email']);
        $user = $userdata->first();
            

        if($user != null)
        {

            if(password_verify($validate['password'], $user->password))
            {
                auth()->login($user);
                    
                return redirect()->route('account')->with(
                    ['success' => $user->firstname.', Bienvenue sur votre Compte']
                );
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

    public function disconect()
    {
    	auth()->logout();
    	return redirect()->route('login.user')->with('succes','Vous êtes maintenant déconnecté');
    }
}
