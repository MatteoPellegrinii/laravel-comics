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
    return view('homepage', [
        'arrLibri'  => config('comics'),
    ]);
})->name('homepage');

Route::get('/prodotti{id} ', function ($id) {
    $comics = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comics = $value;
            break;
        }
    }

    if ($comics) {
        return view('prodotti', [
            'pageTitle' => 'prodotti',
            'comics'     => $comics,
        ]);
    } else {
        abort(404);
    }

})->name('prodotti');

