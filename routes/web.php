<?php

// MIDDLEWARES ------------------------------------------------------------

Route::group(['middleware' => 'auth'], function () {

// Authentication =========================================================

    Route::get('/home', 'LoginController@index')->name('home');
    Route::post('/logout', 'LoginController@logout')->name('logout');

// Views ==================================================================
    // Student
    Route::view('/student', 'user.student.index');
    // Alumnus
    Route::view('/alumnus', 'user.alumnus.index');
    Route::view('/alumnus/profile', 'user.alumnus.profile');
    Route::view('/alumnus/jobs', 'user.alumnus.jobs');
    Route::view('/alumnus/communicate', 'user.alumnus.communicate');
    // Teacher
    Route::view('/teacher', 'user.teacher.index');
    // Chair
    Route::view('/admin', 'user.admin.index');
    // Coor
    Route::view('/admin', 'user.admin.index');
    // Admin
    Route::view('/admin', 'user.admin.index');
    
// Resources ==============================================================

    Route::resource('request', 'User\Alumnus\RequestController');

});

Route::group(['middleware' => 'guest'], function () {

// Guest Users ============================================================

    Route::view('/', 'authenticate.login')->name('login');
    Route::post('/login','LoginController@login')->name('login.submit');
    
	Route::view('/register', 'authenticate.register')->name('showRegister');
    Route::post('/register', 'RegisterController@create')->name('register.submit');
    
});


// LARAVEL ---------------------------------------------------------------

Route::get('/language', function () {
    return view('welcome');
});