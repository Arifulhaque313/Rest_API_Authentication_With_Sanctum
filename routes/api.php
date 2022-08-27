<?php

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

Route::get('/api',function(){
    return Products::get();
});
Route::post('/products',function(){
    return Products::create([
        'name' => 'books',
        'slug'=> 'books',
        'description' => 'Books are availableIn',
        'price' => '125.6',
    ]);
    // echo "Products available";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
