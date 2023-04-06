<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\EmployeeController;


use Illuminate\Support\Facades\Auth;

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
    return view('auth.register');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/addemp', function () {
    return view('Admin.AddEmployee');
});
Route::get('/editempl', function () {
    return view('editempl');
});
Route::get('/manageemp', function () {
    return view('ManageEmployee');
});
Route::get('/createin', function () {
    return view('Admin.AddInvoice');
});
Route::get('/manageinv', function () {
    return view('Admin.ManageInvoice');
});
Route::get('/editinvoice', function () {
    return view('Admin.UpdateInvoice');
});
Route::get('/renderedit', function () {
    return view('renderedit');
});
Route::get('/mypdf', function () {
    return view('mypdf');
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_user');
Route::get('/homes', [App\Http\Controllers\HomeController::class, 'userHome'])->name('employee.homes');



//Add Employee Route
Route::get('/addemps', [EmployeeController::class, 'index']);
Route::post('/addemps', [EmployeeController::class, 'addEmp'])->name('add.employee');


// Edit employee details
Route::get('/editempl', [EmployeeController::class, 'getdetail']);
Route::post('/editempl', [EmployeeController::class, 'editEmp'])->name('edit.employee');


Route::get('/renderedit', [App\Http\Controllers\InvoiceController::class, 'render']);


//Manage Employee Route

//Route::view('/manage', [EmployeeController::class, 'indextable']);
Route::get('/manageemp', [EmployeeController::class, 'table']);


// Add Invoice Details
Route::get('/createin', [App\Http\Controllers\InvoiceController::class, 'index']);
Route::post('/createin', [App\Http\Controllers\InvoiceController::class, 'addInvoice'])->name('add.invoice');

// manage invoice
Route::get('/manageinv', [App\Http\Controllers\InvoiceController::class, 'invtable']);

// Edit Invoice
Route::get('/editinvoice', [App\Http\Controllers\InvoiceController::class, 'indexes']);
Route::post('/editinvoice', [App\Http\Controllers\InvoiceController::class, 'editinv'])->name('edit.invoice');

// Download PDF

Route::get('/mypdf', [App\Http\Controllers\InvoiceController::class, 'generatePDF']);


// Profile Update
Route::controller(userController::class)->group(function () {
    Route::get('profile', 'index');
    Route::post('profile', 'store')->name('image.store');
    Route::post('profile/update', 'profileUpdate')->name('image.profile');
    Route::post('user/password', 'PasswordUpdate')->name('user.pass');
});


//Attendance Of Employee
Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index']);
Route::post('/attendance', [App\Http\Controllers\AttendanceController::class, 'attend'])->name('attend.employee');
Route::get('/viewattendance', [App\Http\Controllers\AttendanceController::class, 'attenTable']);

Route::get('/show', [App\Http\Controllers\AttendanceController::class, 'show']);
