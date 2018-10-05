<?php

// MIDDLEWARES ------------------------------------------------------------

Route::group(['middleware' => 'guest'], function () {

// Guest Users ============================================================
    
        // Login
        Route::get('/', 'LoginController@index')->name('login');
        Route::post('/login','LoginController@login')->name('login.submit');
        
        Route::view('request', 'authenticate.register')->name('showRegister');
        Route::post('request', 'RequestController@store')->name('request.submit');
        
});
        // Logout
        Route::post('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {

// Authentication =========================================================

    // Route::get('/home', 'LoginController@index')->name('home');
    Route::view('/homie', 'newhome')->name('home');

// Views ==================================================================

    // Student
    Route::group(['middleware' => 'student'], function () {  

        Route::view('/studenthome', 'user.student.home')->name('students');
        Route::view('/student/class', 'user.student.class')->name('students');
    });
    Route::group(['middleware' => 'guest'], function () {  
    });
    // Alumnus
    // Route::group(['middleware' => 'alumnus'], function () {  
      
        Route::view('/alumnus/profile', 'user.alumnus.profile');
        Route::view('/alumnus/jobs', 'user.alumnus.jobs');
        Route::view('/alumnus/communicate', 'user.alumnus.communicate');

        //Alumnus 
        Route::resource('jobPosts','JobPostController')->except('create');
        Route::resource('announcements','AnnouncementController')->except('create');
    // });

    
    // Teacher
    // Route::group(['middleware' => 'teacher'], function () {
        // 
    // });
    

    // Admin 
    Route::view('/admin', 'user.admin.index')->name('admins');
    Route::get('/user/students', 'Admin\UserController@students')->name('ShowStudents');
    Route::get('/user/alumni', 'Admin\UserController@alumni')->name('ShowAlumni');
    Route::get('/user/teachers', 'Admin\UserController@teachers')->name('ShowTeachers');
    Route::get('/user/admins', 'Admin\UserController@admins')->name('ShowAdmins');

// Resources ==============================================================

    //Student


    // Teacher

    // Admin
    Route::resource('registration', 'Admin\UserRegistrationController', 
    ['only' => ['index', 'edit', 'update', 'destroy']]);

    Route::get('/home','HomeController@latestPost')->name('home');  

});