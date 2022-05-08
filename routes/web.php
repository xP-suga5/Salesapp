<?php

use Illuminate\Support\Facades\Route;
//追加
use App\Http\Livewire\Clients;
use App\Http\Livewire\Statuses;
use App\Http\Livewire\ClientsSearch;

use App\Http\Controllers\StatusController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('top');
});

//------------追加-----------------
Route::get('clients', Clients::class)->name('clients');
Route::get('clients/search', ClientsSearch::class)->name('clients.search');

//Route::get('/', Clients::class)->name('clients.index');


//Route::get('statuses', Statuses::class)->name('statuses');

Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::post('/status/all_update', [StatusController::class, 'all_update'])->name('status.all_update');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Route::get('/top', function () {
    //    return view('top');
    //})->name('top');
});
