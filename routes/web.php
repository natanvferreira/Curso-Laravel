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

Route::any("/any", function () {
    return "Permite todo tipo de acesso";
});

Route::match(["put", "delete"], "/any", function () {
    return "Permite todo tipo de acesso";
});

Route::get('/produto/{id}/{cat?}', function ($id, $cat = "") {
    return "o id de produtos é: $id <br> a categoria é: $cat";
});

Route::redirect("/sobre", "/empresa");

Route::view("/empresa", "site/empresa");

Route::get('/new', function () {
    return view('news');
})->name("noticias");

Route::get('/novidades', function () {
    return redirect()->route("noticias");
});