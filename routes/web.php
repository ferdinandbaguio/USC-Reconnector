<?php

// MIDDLEWARES ------------------------------------------------------------

Route::group(['middleware' => 'auth'], function () {

// Authentication =========================================================

    Route::get('/home', 'Auth\LoginController@index')->name('home');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Views ==================================================================

    // Student
    Route::view('/student', 'user.student.index')->name('students');

    // Alumnus
    Route::view('/alumnus', 'user.alumnus.index')->name('alumni');
    Route::view('/alumnus/profile', 'user.alumnus.profile');
    Route::view('/alumnus/jobs', 'user.alumnus.jobs');
    Route::view('/alumnus/communicate', 'user.alumnus.communicate');

    // Teacher
    Route::view('/teacher', 'user.teacher.index')->name('teachers');

    // Admin
    Route::view('/admin', 'user.admin.index')->name('admins');
    
// Resources ==============================================================

    //Student


    //Alumnus
    Route::resource('/request', 'User\Alumnus\RequestController');

    // Teacher


    // Admin
    Route::resource('/users/registration', 'User\Admin\Requests\UserRegistrationController', 
    ['only' => ['index', 'edit', 'update', 'destroy']]);

});

// MIDDLEWARES ------------------------------------------------------------

Route::group(['middleware' => 'guest'], function () {

// Guest Users ============================================================

    Route::view('/', 'auth.login')->name('login');
    Route::post('/login','Auth\LoginController@login')->name('login.submit');
    
	Route::view('/register', 'auth.register')->name('showRegister');
    Route::post('/register', 'Auth\RegisterController@create')->name('register.submit');
    
});


// LARAVEL ---------------------------------------------------------------

Route::get('/language', function () {
    return view('welcome');
});