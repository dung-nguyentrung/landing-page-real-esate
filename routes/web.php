<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SheetDB\SheetDB;

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


Route::post('/contact', function (Request $request) {
    $sheetdb = new SheetDB('kcau756vw7pxu');
    $sheetdb->create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email
    ]);
    return back();
})->name('contact');
