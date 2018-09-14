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

Route::get('/maptest', function () {
    return view('users.googlemap_test.map');
});


Route::get('users/student', 'PLoginController@index')->name('student.login');
Route::post('users/student', 'PLoginController@login')->name('login.submit');

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

// Route::resource('carolinians/users/admin' , 'AdminController', 
//     ['only' => ['index', 'show', 'store','destroy'],
// ]);

// Route::resource('carolinians/users/alumni' , 'AlumniController', 
//     ['only' => ['index', 'show', 'store','destroy'],
// ]);

// Route::resource('carolinians/users/student' , 'StudentController', 
//     ['only' => ['index', 'show', 'store','destroy'],
// ]);

// Route::resource('carolinians/users/teacher' , 'TeacherController', 
//     ['only' => ['index', 'show', 'store','destroy'],
// ]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
