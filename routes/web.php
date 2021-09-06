<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\InstructorController;
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
    return view('layouts.template');
});


Route::get('/', function () {
    return view('index');
});



//Vistas de learnes
Route::get('listaAprendices',[LearnerController::class,'index'])->name('learners.index'); 
Route::get('listaAprendices/{id}',[LearnerController::class,'show'])->name('learners.show'); 
Route::get('listaAprendices/{id}/edit',[LearnerController::class,'edit'])->name('learners.edit'); 
Route::put('listaAprendices/{id}',[LearnerController::class,'update'])->name('learners.update'); 
Route::get('registrar/create',[LearnerController::class,'create'])->name('learners.create');
Route::post('listaAprendices',[LearnerController::class,'store'])->name('learners.store'); 
Route::delete('listaAprendices/{id}',[LearnerController::class,'destroy'])->name('learners.destroy'); 


//Vistas de instructors
Route::get('listaInstructores',[InstructorController::class,'index'])->name('InstruSenas.index');
Route::get('listaInstructores/{id}',[InstructorController::class,'show'])->name('InstruSenas.show'); 
Route::get('listaInstructores/{id}/edit',[InstructorController::class,'edit'])->name('InstruSenas.edit'); 
Route::put('listaInstructores/{id}',[InstructorController::class,'update'])->name('InstruSenas.update'); 
Route::get('registro/create',[InstructorController::class,'create'])->name('InstruSenas.create');
Route::post('listaInstructores',[InstructorController::class,'store'])->name('InstruSenas.store'); 
Route::delete('listaInstructores/{id}',[InstructorController::class,'destroy'])->name('InstruSenas.destroy'); 


//Vistas de reports
Route::get('reportes',[ReportController::class,'index'])->name('reports.index');
Route::get('reportes/{id}',[ReportController::class,'show'])->name('reports.show'); 
Route::get('reportes/{id}/edit',[ReportController::class,'edit'])->name('reports.edit'); 
Route::put('reportes/{id}',[ReportController::class,'update'])->name('reports.update'); 
Route::get('reportes/create',[ReportController::class,'create'])->name('reports.create');
Route::post('reportes',[ReportController::class,'store'])->name('reports.store'); 
Route::delete('reportes/{id}',[ReportController::class,'destroy'])->name('reports.destroy'); 

