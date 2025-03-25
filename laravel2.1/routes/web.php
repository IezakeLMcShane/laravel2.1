<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/filtered', [EmployeeController::class, 'filtered']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::get('/employees/name/{id}', [EmployeeController::class, 'getName']);
Route::get('/employees/complex-filter', [EmployeeController::class, 'complexFilter']);
Route::get('/employees/total-salary', [EmployeeController::class, 'totalSalary']);
Route::get('/employees/salary-by-position', [EmployeeController::class, 'salaryByPosition']);
Route::get('/employees/birthday-25', [EmployeeController::class, 'birthday25']);
Route::get('/employees/born-1990', [EmployeeController::class, 'bornIn1990']);
Route::get('/', function () {
    return view('welcome');
});
