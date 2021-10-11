<?php

use App\Http\Controllers\Customers2_TabelController;
use App\Http\Controllers\petugas_TabelController;
use App\Http\Controllers\product_TabelController;
use App\Http\Controllers\transaksi_TabelController;
use App\Http\Controllers\detail_order2_TabelController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/customers2_tabel', 'Customers2_TabelController@store');
Route::get('/customers2_tabel', 'Customers2_TabelController@show');
Route::get('/customers2_tabel/{id}', 'customers2_tabelController@detail');
Route::put('/customers2_tabel/{id}', 'customers2_tabelController@update');
Route::delete('/customers2_tabel/{id}', 'customers2_tabelController@destroy');

Route::post('/petugas_tabel', 'petugas_tabelController@store');
Route::get('/petugas_tabel', 'petugas_tabelController@show');
Route::get('/petugas_tabel/{id}', 'petugas_tabelController@detail');
Route::put('/petugas_tabel/{id}', 'petugas_tabelController@update');
Route::delete('/petugas_tabel/{id}', 'petugas_tabelController@destroy');

Route::post('/product_tabel', 'product_tabelController@store');
Route::get('/product_tabel', 'product_tabelController@show');
Route::get('/product_tabel/{id}', 'product_tabelController@detail');
Route::put('/product_tabel/{id}', 'product_tabelController@update');
Route::delete('/product_tabel/{id}', 'product_tabelController@destroy');

Route::post('/transaksi_tabel', 'transaksi_tabelController@store');
Route::get('/transaksi_tabel', 'transaksi_tabelController@show');
Route::get('/transaksi_tabel/{id}', 'transaksi_tabelController@detail');
Route::put('/transaksi_tabel/{id}', 'transaksi_tabelController@update');
Route::delete('/transaksi_tabel/{id}', 'transaksi_tabelController@destroy');


Route::post('/detail_order2_tabel', 'detail_order2_tabelController@store');
Route::get('/detail_order2_tabel', 'detail_order2_tabelController@show');
Route::get('/detail_order2_tabel/{id}', 'detail_order2_tabelController@detail');
Route::put('/detail_order2_tabel/{id}', 'detail_order2_tabelController@update');
Route::delete('/detail_order2_tabel/{id}', 'detail_order2_tabelController@destroy');