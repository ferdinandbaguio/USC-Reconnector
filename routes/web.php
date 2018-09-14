<?php

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

Route::get('/language', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/alumnus', function () {
    return view('users.alumni.index');
});



Route::resources([
    'carolinians' => 'CarolinianController',
    'companies' => 'CompanyController',
    'courses' => 'CourseController',
    'departments' => 'DepartmentController',
    'industries' => 'IndustryController',
    'jobs' => 'JobController',
    'schools' => 'SchoolController',
    'carolinians/users/admin' => 'AdminController',
    'carolinians/users/alumni' => 'AlumniController',
    'carolinians/users/student' => 'StudentController',
    'carolinians/users/teacher' => 'TeacherController'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/admin/login','Auth\AdminloginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index');
