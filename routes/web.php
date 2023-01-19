<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//view employee list
Route::get('/Employee', [EmployeeController::class, 'index']);

//new employee add screen
Route::get('/Employee/NewEmployee', [EmployeeController::class, 'create']);

//save new employee
Route::post('/Employee/Save', [EmployeeController::class, 'store']);

//view employee details
Route::get('/Employee/{id}/View', [EmployeeController::class, 'view_data']);

//view edit employee details
Route::get('/Employee/{id}/Edit', [EmployeeController::class, 'view_edit']);

//edit employee data
Route::post('/Employee/Update', [EmployeeController::class, 'edit']);
