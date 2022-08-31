<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

// Company controller
Route::controller(CompanyController::class)->group(function (){
    Route::get('/', [CompanyController::class , 'index']);
    Route::get('/company/create','create')->middleware('auth');
    Route::post('/company', 'store');
    Route::get('/company/{company}/update','edit')->middleware('auth');
    Route::put('/company/{company}','update')->middleware('auth');
    Route::delete('/company/{company}','destroy');
    Route::get('/company/{company}','show');
    
    
});

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/employees','index');
    Route::get('/employees/{company}/create', 'create');
    Route::post('/employees/{company}','store');
    Route::get('/employees/{employee}/edit','edit');
    Route::put('/employees/{employee}', 'update');
    Route::delete('/employee/{employee}' , 'destroy');
});

// Route::get('/', [CompanyController::class , 'index']);
// Route::get('/company/create',[CompanyController::class,'create'])->middleware('auth');
// Route::get('/company/{company}/update',[CompanyController::class,'edit'])->middleware('auth');
// Route::put('/company/{company}',[CompanyController::class,'update'])->middleware('auth');
// Route::delete('/company/{company}',[CompanyController::class,'destroy']);
// Route::post('/company',[CompanyController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
