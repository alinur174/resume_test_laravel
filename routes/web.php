<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CabinetController;
use App\Http\Controllers\EmpController;
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
    return redirect('admin');
});


Auth::routes();


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('', [AdminController::class, 'index'])->name('cabinet');
    Route::get('create', [AdminController::class, 'create'])->name('resume.create');
    Route::post('store', [AdminController::class, 'store'])->name('store');
    Route::post('update/{resume}', [AdminController::class, 'update'])->name('resume.update');
    Route::post('delete/{resume}' ,[AdminController::class, 'destroy'])->name('resume.delete');
    Route::get('edit/{resume}', [AdminController::class, 'edit'])->name('resume.edit');
    Route::get('/getresume', [EmpController::class, 'getResumes']);
    Route::get('/downloadtopdf/{resume}', [AdminController::class, 'downloadPDF'])->name('download');
});





