<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::prefix('frontEnd')-> group(function (){
    Route::get('/' , ['uses'=>'PageController@index', 'as'=> 'frontEnd.index']);
    Route::get('brands' , ['uses'=>'PageController@brands', 'as'=> 'frontEnd.brands']);
    Route::get('products' , ['uses'=>'PageController@products', 'as'=> 'frontEnd.products']);
    Route::get('authenticate' , ['uses'=>'PageController@authenticate', 'as'=> 'frontEnd.authenticate']);
    Route::get('unit' , ['uses'=>'PageController@unit', 'as'=> 'frontEnd.unit']);
    Route::post('authenticate' , ['uses'=>'PageController@search', 'as'=> 'frontEnd.search']);
    Route::get('authenticate' , ['uses'=>'PageController@search', 'as'=> 'frontEnd.search']);

});

Route::prefix('backEnd')-> group(function (){
    Route::get('/' , ['uses'=>'AdminController@index', 'as'=> 'backEnd.index']);
    Route::get('/index', ['uses'=>'AdminRegistrationController@adminRegistrationForm', 'as'=>'backEnd.index']);
    Route::post('/index', ['uses'=>'AdminRegistrationController@register', 'as'=>'backEnd.index']);


    Route::get('/admin/login', ['uses' => 'AdminLoginController@getAdminLogin', 'as' => 'backEnd.admin.login']);
    Route::post('/admin/login', ['uses'=>'AdminLoginController@adminAuth', 'as'=>'backEnd.admin.auth']);
    Route::post('/login', ['uses'=>'AdminLoginController@adminAuth', 'as'=>'backEnd.auth']);
    Route::get('/admin/index', 'AdminRegistrationController@index')->name('backEnd.admin.index');
    Route::get('/admin/regAdmin', 'AdminRegistrationController@showRegistrationForm')->name('backEnd.admin.create');
    Route::post('/admin/regAdmin', ['as'=>'backEnd.admin.store','uses'=>'AdminRegistrationController@register']);
    Route::delete('/admin/admin/{admin}/', 'AdminRegistrationController@destroy')->name('backEnd.admin.destroy');



      Route::prefix('admin')-> group(function () {


//       Route::get('/login', ['uses' => 'AdminLoginController@getAdminLogin', 'as' => 'backEnd.admin.login']);
//       Route::post('/login', ['uses'=>'AdminLoginController@adminAuth', 'as'=>'backEnd.admin.auth',]);
//       Route::get('/regAdmin', ['uses'=>'AdminRegistrationController@adminRegistrationForm', 'as'=>'backEnd.admin.regAdmin',]);
//       Route::post('/regAdmin', ['uses'=>'AdminRegistrationController@registerAdmin', 'as'=>'backEnd.admin.regAdmin',]);

          Route::group(['middleware' => ['admin']], function () {

              Route::get('dashboard', ['uses'=>'AdminController@dashboard', 'as'=>'backEnd.admin.dashboard',]);

              Route::prefix('brand')-> group(function () {
                  Route::get('/', ['uses' =>'BrandController@index', 'as' => 'backEnd.admin.brand.index']);
                  Route::get('/create',  ['uses' =>'BrandController@create', 'as' => 'backEnd.admin.brand.create']);
                  Route::get('/list',  ['uses' =>'BrandController@lists', 'as' => 'backEnd.admin.brand.list']);
                  Route::post('/',  ['uses' =>'BrandController@store', 'as' => 'backEnd.admin.brand.store']);
                  Route::get('/{id}',  ['uses' =>'BrandController@show', 'as' => 'backEnd.admin.brand.show']);
                  Route::get('/{id}/edit',  ['uses' =>'BrandController@edit', 'as' => 'backEnd.admin.brand.edit']);
                  Route::put('/{brand}',  ['uses' =>'BrandController@update', 'as' => 'backEnd.admin.brand.update']);
                  Route::delete('/{brand}',  ['uses' =>'BrandController@destroy', 'as' => 'backEnd.admin.brand.destroy']);
              });


              Route::prefix('product')-> group(function () {
                  Route::get('/', ['uses' =>'ProductController@index', 'as' => 'backEnd.admin.product.index']);
                  Route::get('/create',  ['uses' =>'ProductController@create', 'as' => 'backEnd.admin.product.create']);
                  Route::get('/list',  ['uses' =>'ProductController@lists', 'as' => 'backEnd.admin.product.list']);
                  Route::post('/',  ['uses' =>'ProductController@store', 'as' => 'backEnd.admin.product.store']);
                  Route::get('/{id}',  ['uses' =>'ProductController@show', 'as' => 'backEnd.admin.product.show']);
                  Route::get('/{id}/edit',  ['uses' =>'ProductController@edit', 'as' => 'backEnd.admin.product.edit']);
                  Route::put('/{id}',  ['uses' =>'ProductController@update', 'as' => 'backEnd.admin.product.update']);
                  Route::delete('/{id}',  ['uses' =>'ProductController@destroy', 'as' => 'backEnd.admin.product.destroy']);
              });


              Route::prefix('unit')-> group(function () {
                  Route::get('/', ['uses' =>'UnitController@index', 'as' => 'backEnd.admin.unit.index']);
                  Route::get('/create',  ['uses' =>'UnitController@create', 'as' => 'backEnd.admin.unit.create']);
//                  Route::get('/brandCreate', 'UnitController@getBrand')->name;
                  Route::get('/brandCreate/{id}',  ['uses' =>'UnitController@getBrand', 'as' => 'unit.getBrand']);
                  Route::get('/list',  ['uses' =>'UnitController@lists', 'as' => 'backEnd.admin.unit.list']);
                  Route::post('/',  ['uses' =>'UnitController@store', 'as' => 'backEnd.admin.unit.store']);
                  Route::get('/{id}',  ['uses' =>'UnitController@show', 'as' => 'backEnd.admin.unit.show']);
                  Route::get('/{id}/edit',  ['uses' =>'UnitController@edit', 'as' => 'backEnd.admin.unit.edit']);
                  Route::put('/{id}',  ['uses' =>'UnitController@update', 'as' => 'backEnd.admin.unit.update']);
                  Route::delete('/{id}',  ['uses' =>'UnitController@destroy', 'as' => 'backEnd.admin.unit.destroy']);
              });




//            Route::get('/login', ['uses' => 'AdminLoginController@getAdminLogin', 'as' => 'backEnd.admin.login']);
        });
    });
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
