<?php

// use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/products', 'ProductsController@index');
// Route::post('/products/create', 'ProductsController@store');
// Route::put('/products/show/{products}', 'ProductsController@show');
// Route::delete('/products/destroy/{products}', 'ProductsController@destroy');
// Route::get('/products/custom', 'ProductsController@custom');


// public routes 
Route::post('/register', 'authController@register');
Route::post('/login', 'authController@login');

// protected routes 
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource('products', 'ProductsController');
    Route::post('/logout', 'authController@logout');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
