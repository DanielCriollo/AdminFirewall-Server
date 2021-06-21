<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReglasController;


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

//CLI 1

Route::get('/admin/cli-fw1',function(){
    return view('cli-fw1.index');
})->name('cli-fw1')->middleware('auth');


Route::get('/admin/conf-fw1',function(){
    return view('conf-fw1.index');
})->name('conf-fw1')->middleware('auth');

Route::get('/admin/conf-fw2',function(){
    return view('conf-fw2.index');
})->name('conf-fw2')->middleware('auth');

//IPTABLES

Route::get('/admin/iptables-fw1',function(){
    return view('iptables-fw1.index');
})->name('iptables-fw1')->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
