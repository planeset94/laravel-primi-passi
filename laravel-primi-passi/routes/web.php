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

$data=[


            'name'=>"Andrea",
            'lname'=>"Monti",
            'age'=> 26
        

];
    return view('home', $data);
});

Route::get('/office', function () {

$name="Andrea";
$lname="Monti";
$age=26;
    return view('office', compact('name', 'lname', 'age'));
});