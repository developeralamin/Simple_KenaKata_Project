<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\EmployeeRegistrationController;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index'); 
})->name('dashboard');


//CategoryController All Routes here

Route::prefix('category')->group(function(){

Route::get('/view',[CategoryController::class,'ViewCategory'])->name('Category.view');
Route::get('/add',[CategoryController::class,'addCategory'])->name('Category.add');
Route::post('/store',[CategoryController::class,'StoreCategory'])->name('Category.store');
Route::get('/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('Category.Edit');
Route::post('/update/{id}',[CategoryController::class,'CategoryUpdate'])->name('Category.update');
Route::get('/delete/{id}',[CategoryController::class,'Categorydelete'])->name('Category.delete');

});

//UserGroupController All Routes here

Route::prefix('user_group')->group(function(){

Route::get('/view',[UserGroupController::class,'ViewUserGroup'])->name('UserGroup.view');
Route::get('/add',[UserGroupController::class,'addUserGroup'])->name('UserGroup.add');
Route::post('/store',[UserGroupController::class,'StoreUserGroup'])->name('UserGroup.store');
Route::get('/edit/{id}',[UserGroupController::class,'UserGroupEdit'])->name('UserGroup.Edit');
Route::post('/update/{id}',[UserGroupController::class,'UserGroupUpdate'])->name('UserGroup.update');
Route::get('/delete/{id}',[UserGroupController::class,'UserGroupdelete'])->name('UserGroup.delete');

});


//UserGroupController All Routes here

Route::prefix('employee_registration')->group(function(){

Route::get('/view',[EmployeeRegistrationController::class,'ViewEmployee'])->name('Employee.view');
Route::get('/add',[EmployeeRegistrationController::class,'addEmployee'])->name('Employee.add');
Route::post('/store',[EmployeeRegistrationController::class,'StoreEmployee'])->name('Employee.store');
Route::get('/edit/{id}',[EmployeeRegistrationController::class,'EmployeeEdit'])->name('Employee.Edit');
Route::post('/update/{id}',[EmployeeRegistrationController::class,'EmployeeUpdate'])->name('Employee.update');
Route::get('/delete/{id}',[EmployeeRegistrationController::class,'Employeedelete'])->name('Employee.delete');
Route::get('/details/{id}',[EmployeeRegistrationController::class,'Employeedelete'])->name('Employee.details');

});
