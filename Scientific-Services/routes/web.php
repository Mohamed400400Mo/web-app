<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController ;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\ReasonsGraduationController;
use App\Http\Controllers\StudentServicesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[IndexController::class ,'index'] )->name('index.index') ; 

Route::get('/index/{index}', [IndexController::class,'show'])->name('index.show') ;

Route::get('/index/create', [IndexController::class,'create'])->name('index.create') ;//signup-stu

Route::post('/index', [IndexController::class ,'store'])->name('index.store') ; //signup-stu  

Route::post('/index/student-services', [LoginController::class ,'store'])->name('index.store-login-stu') ; //login-stu 

Route::get('/index/studentservice/{studentservice}', [StudentServicesController::class,'show'])->name('service.show') ;//signup-stu
Route::Post('/graduation-reasons', [IndexController::class, 'graduation_certificate'])->name('graduation_certificate.store');
Route::post('/submit-reason', [IndexController::class, 'reasons_graduation'])->name('submit_reason');






