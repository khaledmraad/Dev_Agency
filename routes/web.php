<?php

use App\Events\MessageNotif;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Message;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/home/pdf','App\Http\Controllers\Admin@upload');



Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    
        Route::get('/');
            
        Route::post('/add_admin', 'App\Http\Controllers\Admin@New_admin');

        Route::post('/add_dev', 'App\Http\Controllers\Admin@New_dev');

        Route::post('/send_task', 'App\Http\Controllers\Admin@Send_task');

        Route::post('/send_timeline', 'App\Http\Controllers\Admin@Send_timeline');

        Route::get('/dev_cont_panel', 'App\Http\Controllers\Admin@devpanel')->middleware('auth','admin');

        Route::get('/client_cont_panel', 'App\Http\Controllers\Admin@clientpanel');

        Route::get('/admin_cont_panel', 'App\Http\Controllers\Admin@adminpanel');

        Route::post('/add_project', 'App\Http\Controllers\Admin@addproject');


});




Route::group(['middleware' => 'dev', 'prefix' => 'dev'], function () {

        Route::get('/', 'App\Http\Controllers\DeveloperController@index');

        Route::post('/task_done', 'App\Http\Controllers\DeveloperController@taskdone');

        Route::post('/task_still', 'App\Http\Controllers\DeveloperController@taskstill');

        Route::post('/task_remove', 'App\Http\Controllers\DeveloperController@taskremove');

});



Route::group(['middleware' => 'user', 'prefix' => 'home'], function () {

        Route::get('/timeline', 'App\Http\Controllers\UserController@timeline')->name('timeline');

        Route::get('/notification', 'App\Http\Controllers\UserController@notification');

        Route::get('/info', 'App\Http\Controllers\UserController@info');

        Route::get('/messages', 'App\Http\Controllers\UserController@messages');

        Route::get('/bills', 'App\Http\Controllers\UserController@bills');

        Route::post('/request_project', 'App\Http\Controllers\UserController@request_project')->name('request_project');

});



Route::get('/error', 'App\Http\Controllers\ErrorController@routing');


