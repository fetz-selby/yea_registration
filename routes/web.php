<?php

use App\Http\Controllers\Client\RegistrationController;
use App\Http\Livewire\Client\ClientRegistrationComponent;
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


Route::prefix('client')->name('client.')->group(function(){
    //Registeration
    Route::post('/post', [RegistrationController::class, 'store'])->name('store');
    Route::get('register', [RegistrationController::class, 'register'])->name('register');
    Route::get('/receipt/{num}', [RegistrationController::class, 'show'])->name('show');
    Route::get('set-pin', [RegistrationController::class, 'setPin'])->name('set.pin');

    // Route::post('set-pin', [RegistrationController::class, 'storeSetPin'])->name('set.pin');

});
