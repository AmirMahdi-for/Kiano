<?php

use App\Models\Articel;
use Inertia\Inertia;
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

//simple route
Route::get('articel', function(){
    return 'this is articel';
});

Route::get('art/{var}', function($var){
    return $var;
});

//Simple Route Group:

Route::prefix('admin')->group(function(){
    Route::get('/post', function () {
        return 'admin post';
    });
    Route::get('/art', function () {
        return 'admin art';
    });
    Route::get('/digi', function () {
        return 'admin digi';
    });
    Route::get('/user', function () {
        return 'admin user';
    });
});


// Route::get('/', function () {
//     return Inertia::render("test");
//  });

Route::get('/model', function(){
    $articels = Articel::all();
});