<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ContactController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'MyItemsController@index')->name('dashboard');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact', 'ContactController@store');

// Route::get('myitems', '')->name('myitems');

Route::get('auctions', 'AuctionController@index')->name('auction');
Route::get('auction/{id}', 'AuctionController@viewone')->name('oneauction');
Route::get('bidding/{id}', 'AuctionController@openitem')->name('bidonitem');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
