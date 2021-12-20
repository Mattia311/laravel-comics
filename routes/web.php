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


    $comics = config('db');


    return view('welcome', compact('comics'));
});


Route::get('/description', function () {
    $comics = config('db');

    return view('description', compact('comics'));
})-> name('description');




Route::get('comics/{id}', function ($id) {
    $comics = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comic', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic');
