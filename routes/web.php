<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TwilioController;
use NotificationChanel\Telegram\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');


Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('/product', ProductController::class);

Route::get('chat', 'App\Http\Controllers\ChatController@show')->name('chat.show');

Route::post('/enviarcorreo', [App\Http\Controllers\EmailController::class, 'enviarcorreo'])->name('enviarcorreo');

//Notification::route('telegram', '1247512435')
    //>notify(new App\Http\Controllers\TelegramController());
//Route::get('/send-sms', [TwilioController::class, 'sendSms']);