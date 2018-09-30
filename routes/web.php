<?php


Route::group(['middleware' => 'guest'], function () {

    // Guest Users ============================================================
    
        Route::view('/', 'authenticate.login')->name('login');
        Route::post('/login','LoginController@login')->name('login.submit');
        
        Route::view('request', 'authenticate.register')->name('showRegister');
        Route::post('request', 'RequestController@store')->name('request.submit');
        
});


Route::post('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {

// Authentication =========================================================

    Route::get('/home', 'LoginController@index')->name('home');

// Views ==================================================================
    // Student
    Route::view('/student', 'user.student.index')->name('students');
    Route::view('/studenthome', 'user.student.home')->name('students');


    // Alumnus
    Route::view('/alumnus', 'user.alumnus.index');
    Route::view('/alumnus/profile', 'user.alumnus.profile');
    Route::view('/alumnus/jobs', 'user.alumnus.jobs');
    Route::view('/alumnus/communicate', 'user.alumnus.communicate');
    // Teacher
    Route::view('/teacher', 'user.teacher.index')->name('teachers');
    // Admin & Coordinator & Chair
    // Route::view('/admin', 'user.admin.index')->name('admins');


    //Resource Controllers
    Route::resource('jobPosts','JobPostController')->except('create');

    //TEST for admin table pending access request
    Route::get('test','RequestController@index');
    Route::post('test/approve/{id}','RequestController@approve')->name('request.approve');
    Route::post('test/decline/{id}','RequestController@decline')->name('request.decline');
});




