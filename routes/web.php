<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ReportController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/developer',[DeveloperController::class,'index'])->name('Developer');
Route::get('/developer/create',[DeveloperController::class,'create']);
Route::post('/developer/store',[DeveloperController::class,'store']);

Route::get('/report',[ReportController::class,'index'])->name('Report');
Route::get('/report/addReport',[ReportController::class,'addReport']);
Route::get('/report/create',[DeveloperController::class,'create']);
Route::post('/report/store',[ReportController::class,'store']);
Route::get('/report/reportverification',[ReportController::class,'reportverification']);
Route::get('/report/reportrejected',[ReportController::class,'reportrejected']);
Route::get('/report/reportverified',[ReportController::class,'reportverified']);
Route::get('/report/bulan',[ReportController::class,'bulan']);
Route::get('/report/wke',[ReportController::class,'wke']);
Route::post('/report/pengaturan',[ReportController::class,'pengaturan']);
Route::get('/report/pengaturan',[ReportController::class,'pengaturan']);
Route::get('/report/tk',[ReportController::class,'tk']);
Route::post('/addReport',[ReportController::class,'tambahLaporan'])->name('addReport');

Route::get('edit/{id}',[ReportController::class,'update']);
Route::post('save_update_report/{id}',[ReportController::class,'save_update']);


Route::post('delete/{id}',[ReportController::class,'delete']);

Route::get('setuju/{id}',[ReportController::class,'setuju']);
Route::get('tolak/{id}',[ReportController::class,'tolak']);