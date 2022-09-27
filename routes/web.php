'<?php
;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
 

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

// Index & Register Route
Route::get('/', [indexController::class, 'showIndex']);
Route::get('/register/', [UserController::class, 'showRegister']);
Route::post('/register/', [UserController::class, 'store']);

//Authentification Route
Route::get('/verification.verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/profile/');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Login form
Route::get('/login/', [UserController::class, 'showLogin']);
Route::post('/login/', [UserController::class, 'login']);

//Profile CRUD
Route::get('/profile/', [UserController::class, 'showProfile']);
Route::post('/profile/', [UserController::class, 'profileUpdate']);
Route::get('/delete/{id}/', [UserController::class, 'delete']);

//CRUD Adver
Route::get('/adds/', [AddsController::class, 'showAdds']);
Route::post('/adds/', [AddsController::class, 'store']);







