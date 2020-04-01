<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

#==================================================================


#==================================================================
//Route::get('/home', 'HomeController@index')->name('home');


/* -------------------- il faut donner les noms en anglais--------------- */

/* cote utilisateur client */



Route::get('/blog', 'customer\BlogController@index')->name('blog');

Route::get('/boutiques', 'customer\ShopController@index');//->name('shops');

Route::get('/shop', 'customer\ShopController@show');//->name('shop');

Route::get('/service', 'customer\ServiceController@index');//->name('service');
Route::get('/admin', 'SuperAdmin\AdminController@index');
Route::get('/compte', 'customer\CustomerController@index');//->name('account');

Route::get('/produits', 'customer\ProductController@index')->name('products');
Route::get('/detail-produit', 'customer\ProductController@show')->name('product-detail');
Route::get('/galerie', 'customer\GalleryController@index')->name('gallery');


#=======================Authentification==========================
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/shop', 'Auth\LoginController@showShopLoginForm');
Route::get('/login/service', 'Auth\LoginController@showServiceLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/shop', 'Auth\RegisterController@showShopRegisterForm');
Route::get('/register/service','Auth\RegisterController@showServiceRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/shop', 'Auth\LoginController@shopLogin');
Route::post('/login/service', 'Auth\LoginController@serviceLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');//->name('registerAdmin');
Route::post('/register/shop', 'Auth\RegisterController@createShop')->name('registerShop');
Route::post('/register/service', 'Auth\RegisterController@createService')->name('registerService');

//Route::view('/compte', 'customers.account')->middleware('auth');
//Route::view('/admin', 'admin')->middleware('auth');
//Route::view('/shop', 'shop')->middleware('auth');
//Route::view('/service', 'service')->middleware('auth');
#==============================================================

/* côté boutiques */

/* pour la connexion et inscription, tu peux recopier le dossier AUTH dans les vues SHOP et SuperAdmin si tu trouves
que çà te facilitera la minipulation */

// Route::get('/b/loginview', 'AuthShop\LoginShopController@index')->name('loginShop');
// Route::post('/b/login', 'AuthShop\LoginShopController@login')->name('loginShop');

// Route::get('/b/registerview', 'AuthShop\RegisterShopController@index')->name('register.shop');

// Route::post('/b/register', 'AuthShop\RegisterShopController@register')->name('registerShop');

Route::get('/b/tableau-de-bord', 'Shop\ShopController@index')->name('dashboardShop');

/* cote administrateur */


