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


Route::group(["prefix" => "admin", "as", "admin."], function () {
    Route::get("dashborad", function () {
        return "dashboard";
    })->name("dashboard");

    Route::get("users", function () {
        return "users";
    })->name("users");

    Route::get("clientes", function () {
        return "clientes";
    })->name("clientes");
});
