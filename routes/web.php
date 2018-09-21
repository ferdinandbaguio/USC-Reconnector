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

// Test Routes
    Route::resource('request', 'User\RequestController');
    Route::get('/alumnus/profile', 'User\AlumnusController@profile');
// Test Routes

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/alumnus', function () {
    return view('users.alumni.index');
});


Route::get('/alumni_profile', function () {
    return view('users.alumni.profile');
});

Route::get('/empty', function () {
    return view('users.empty_template.alumni');
});

Route::get('/maptest', function () {
    return view('users.googlemap_test.map');
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

Route::post('/login','LoginController@login')->name('login.submit');

Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/', function(){
        return view('welcome');
    });


    Route::get('/home',function(){
    if(Auth::carolinian()->userType == 'Student'){
        return view('users.student.profile');
    }else{
        return view('users.admin.profile');
    }


    });
});

Route::get('/language', function () {
    return view('welcome');
});