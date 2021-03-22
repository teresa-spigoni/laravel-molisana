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

    $pastaArray = config('pasta');

    return view('homepage',
    ['pastaArray' => $pastaArray]);
});

Route::get('/product/{id?}', function ($id = null) {

    $pastaArray = config('pasta');

    if($id > count($pastaArray) || empty($id)) {
        abort(404);
    }
    
    return view('products',
    ['idProduct' => $id,
    'pastaArray' => $pastaArray]);
});