<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserGroupController;

//Employee Controller Here

use App\Http\Controllers\EmployeeRegistrationController;
use App\Http\Controllers\EmployeIncrementSalaryController;
use App\Http\Controllers\EmployeeLeaveController;
use App\Http\Controllers\EmployeeAttendanceController;

//Product Controller Here
use App\Http\Controllers\ProductController;

//Customer Controller Here
use App\Http\Controllers\CustomerController;



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


//EmployeeeGroupController All Routes here
//EmployeeeGroupController All Routes here

Route::prefix('Employee')->group(function(){


Route::get('/view',[EmployeeRegistrationController::class,'ViewEmployee'])->name('Employee.view');
Route::get('/add',[EmployeeRegistrationController::class,'addEmployee'])->name('Employee.add');
Route::post('/store',[EmployeeRegistrationController::class,'StoreEmployee'])->name('Employee.store');
Route::get('/edit/{id}',[EmployeeRegistrationController::class,'EmployeeEdit'])->name('Employee.Edit');
Route::post('/update/{id}',[EmployeeRegistrationController::class,'EmployeeUpdate'])->name('Employee.update');
Route::get('/delete/{id}',[EmployeeRegistrationController::class,'Employeedelete'])->name('Employee.delete');
Route::get('/details/{id}',[EmployeeRegistrationController::class,'Employeedetails'])->name('Employee.details');



//EmployeeeSalary Controller
//EmployeeeSalary Controller

Route::get('/salary_view',[EmployeIncrementSalaryController::class,'ViewEmployeeSalary'])->name('EmployeeSalary.view');

 Route::get('employee/salary/increment/{id}',[EmployeIncrementSalaryController::class,'SalaryIncrement'])->name('employee.salary.increment');

 Route::post('employee/salary/update/store/{id}',[EmployeIncrementSalaryController::class,'SalaryStoreUpdate'])->name('employee.salary.store.update');

 Route::get('employee/salary/details/{id}',[EmployeIncrementSalaryController::class,'SalaryDetails'])->name('employee.salary.details');


///EmployeeLeave Controller here
///EmployeeLeave Controller here

Route::get('/EmployeeLeaveview',[EmployeeLeaveController::class,'ViewEmployeeLeave'])->name('EmployeeLeave.view');
Route::get('/EmployeeLeaveadd',[EmployeeLeaveController::class,'addEmployeeLeave'])->name('EmployeeLeave.add');
Route::post('/EmployeeLeavestore',[EmployeeLeaveController::class,'StoreEmployeeLeave'])->name('EmployeeLeave.store');
Route::get('/EmployeeLeaveedit/{id}',[EmployeeLeaveController::class,'EmployeeLeaveEdit'])->name('EmployeeLeave.Edit');
Route::post('/EmployeeLeaveupdate/{id}',[EmployeeLeaveController::class,'EmployeeLeaveUpdate'])->name('EmployeeLeave.update');
Route::get('/EmployeeLeavedelete/{id}',[EmployeeLeaveController::class,'EmployeeLeavedelete'])->name('EmployeeLeave.delete');


//EmployeeAttendance Controller Here
//EmployeeAttendance Controller Here

Route::get('/attendanceview',[EmployeeAttendanceController::class,'ViewEmployeeAttendance'])->name('EmployeAttendance.view');

Route::get('/attendanceadd',[EmployeeAttendanceController::class,'addEmployeeAttendance'])->name('EmployeAttendance.add');

Route::post('/attendancestore',[EmployeeAttendanceController::class,'StoreEmployeeAttendance'])->name('EmployeAttendance.store');

Route::get('/attendanceedit/{date}',[EmployeeAttendanceController::class,'EmployeeAttendanceEdit'])->name('EmployeAttendance.Edit');

Route::get('/attendancedetails/{date}',[EmployeeAttendanceController::class,'EmployeeAttendancedetails'])->name('EmployeAttendance.details');


});


//Products All Route here


Route::prefix('product')->group(function(){

Route::get('/view',[ProductController::class,'ViewProduct'])->name('Product.view');
Route::get('/add',[ProductController::class,'addProduct'])->name('Product.add');
Route::post('/store',[ProductController::class,'StoreProduct'])->name('Product.store');
Route::get('/edit/{id}',[ProductController::class,'ProductEdit'])->name('Product.Edit');
Route::post('/update/{id}',[ProductController::class,'ProductUpdate'])->name('Product.update');
Route::get('/delete/{id}',[ProductController::class,'Productdelete'])->name('Product.delete');

});

//Customer All Routes here

Route::prefix('customer')->group(function(){

Route::get('/view',[CustomerController::class,'ViewCustomer'])->name('Customer.view');
Route::get('/add',[CustomerController::class,'addCustomer'])->name('Customer.add');
Route::post('/store',[CustomerController::class,'StoreCustomer'])->name('Customer.store');
Route::get('/edit/{id}',[CustomerController::class,'CustomerEdit'])->name('Customer.Edit');
Route::post('/update/{id}',[CustomerController::class,'CustomerUpdate'])->name('Customer.update');
Route::get('/delete/{id}',[CustomerController::class,'Customerdelete'])->name('Customer.delete');


});


