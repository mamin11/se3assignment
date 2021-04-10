<?php

use App\EmailList;
use App\ProductCategory;
use Illuminate\Http\Request;
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
    $paintings = ProductCategory::where('name', 'Paintings')->first();
    $sculptures = ProductCategory::where('name', 'Sculptures')->first();
    $prints = ProductCategory::where('name', 'Photography')->first();
    return view('home')->with([
        'paintings' => $paintings,
        'prints' => $prints,
        'sculptures' => $sculptures
    ]);
})->name('home');

Route::post('newsletter', function (Request $request) {
    //validate
    $validatedData = $request->validate([
        'email' => 'required|email|unique:email_lists,email',
    ]);

    //create
    EmailList::create([
        'email' => $request->email
    ]);

    //refresh
    return redirect()->route('home');
});

Route::get('locations', function () {
    return view('locations');
})->name('locations');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'MyItemsController@index')->name('dashboard');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact', 'ContactController@store');

Route::get('services', 'myItemsController@services')->name('services');

Route::get('auctions', 'AuctionController@index')->name('auction');
Route::get('auction/{id}', 'AuctionController@viewone')->name('oneauction');
Route::get('bidding/{id}', 'AuctionController@openitem')->name('bidonitem');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
