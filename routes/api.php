<?php

use App\Http\ApiV1\Modules\Companies\Controllers\CompanyController;
use App\Http\ApiV1\Modules\Departments\Controllers\DepartmentController;
use App\Http\ApiV1\Modules\Employees\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('v1/companies', [CompanyController::class, 'create']);
Route::get('/v1/companies/{id}', [CompanyController::class, 'get']);
Route::delete('v1/companies/{id}', [CompanyController::class, 'delete']);
Route::put('v1/companies/{id}', [CompanyController::class, 'replace']);
Route::patch('v1/companies/{id}', [CompanyController::class, 'patch']);

Route::post('v1/departments', [DepartmentController::class, 'create']);
Route::get('/v1/departments/{id}', [DepartmentController::class, 'get']);
Route::delete('v1/departments/{id}', [DepartmentController::class, 'delete']);
Route::put('v1/departments/{id}', [DepartmentController::class, 'replace']);
Route::patch('v1/departments/{id}', [DepartmentController::class, 'patch']);

Route::post('v1/employees', [EmployeeController::class, 'create']);
Route::get('/v1/employees/{id}', [EmployeeController::class, 'get']);
Route::delete('v1/employees/{id}', [EmployeeController::class, 'delete']);
Route::put('v1/employees/{id}', [EmployeeController::class, 'replace']);
Route::patch('v1/employees/{id}', [EmployeeController::class, 'patch']);

Route::fallback(function () {
    return response()->json(
        [
            'data' => null,
            'errors' => [
                'code' => 404,
                'message' => 'Route not found'
            ]
        ],
    );
});