<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\models\Admin;
use App\models\Service;
use App\models\Shop;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:shop');
        $this->middleware('guest:service');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    #==========================Register view ===============
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showShopRegisterForm()
    {
        return view('auth.shop.register', ['url' => 'shop']);
    }

    public function showServiceRegisterForm()
    {
        return view('auth.service.register', ['url' => 'service']);
    }

    #===============================================================
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    #=================Création administrateur===================
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'phone' => $request['number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }

    #=================Création de boutique===================
    protected function createShop(Request $request)
    {
        $request = $request->validate([
            'nameShop' => ['required', 'string', 'max:255'],
            'nameShopOwner' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:shops'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $shop = Shop::create([
            'nameShop' => $request['nameShop'],
            'nameShopOwner' => $request['nameShopOwner'],
            'phone' => $request['number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/shop');
    }

    #=================Création de service===================
    protected function createService(Request $request)
    {
        $request = $request->validate([
            'nameService' => ['required', 'string', 'max:255'],
            'nameServiceOwner' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:services'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $service = Service::create([
            'nameService' => $request['nameService'],
            'nameServiceOwner' => $request['nameServiceOwner'],
            'phone' => $request['number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/service');
    }

}
