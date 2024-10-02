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
    return redirect('/login');
    //return view('welcome');
});

Route::get('/create_user', function () {
    return redirect('/create_user');    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/license', function () {
//     return view('license');
// });

Route::get('/license', [App\Http\Controllers\licenseController::class, 'index'])->name('license');
Route::get('/license/create', [App\Http\Controllers\licenseController::class, 'create_form']);
Route::get('/license/upload-data/{id}', [App\Http\Controllers\licenseController::class, 'upload_data_form']);
Route::get('/license/update/{id}', [App\Http\Controllers\licenseController::class, 'update_form']);
Route::get('/license/view/{id}', [App\Http\Controllers\licenseController::class, 'view_detail']);

Route::post('/inset/license', [App\Http\Controllers\licenseController::class, 'store']);
Route::post('/upload-data/license/{id}', [App\Http\Controllers\licenseController::class, 'proses_upload_data']);
Route::post('/update/license/{id}', [App\Http\Controllers\licenseController::class, 'update']);

Route::get('/delete/license/{id}', [App\Http\Controllers\licenseController::class, 'delete']);
Route::get('/in-progress/license/{id}', [App\Http\Controllers\licenseController::class, 'inprogress']);
Route::get('/declain/license/{id}', [App\Http\Controllers\licenseController::class, 'declain']);
Route::get('/accept/license/{id}', [App\Http\Controllers\licenseController::class, 'accept']);

Route::get('/download-data/license/{path}', [App\Http\Controllers\licenseController::class, 'downloadFile']);
Route::get('/notification/read/{id}', [App\Http\Controllers\Notification::class, 'ChangeStatusRead']);


Route::get('/survey/{id}', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey');
Route::get('/detail/survey/{id}', [App\Http\Controllers\SurveyController::class, 'detail']);
Route::get('/detail_all/survey', [App\Http\Controllers\SurveyController::class, 'detail_all']);
Route::post('/insert/survey/{id}', [App\Http\Controllers\SurveyController::class, 'store']);


Route::get('/makeuser', [App\Http\Controllers\MakeUser::class, 'index'])->name('makeuser');




