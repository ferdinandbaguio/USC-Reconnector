<?php

// MIDDLEWARES ------------------------------------------------------------

Route::group(['middleware' => 'guest'], function () {

// Guest Users ============================================================

        // Login
        Route::get('/', 'LoginController@index')->name('login');
        Route::post('/login','LoginController@doLogin')->name('login.submit');
        Route::post('/register', 'RegisterationController@store')->name('register.submit');
        
});
        // Logout
        Route::post('logout', 'LoginController@logout')->name('logout');
    
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'home'], function () {
        Route::get('/home','HomeController@latestPost')->name('home');   
        Route::resource('jobPosts','JobPostController')->except('create');
        Route::resource('announcements','AnnouncementController')->except('create');

        //Update post
        Route::patch('announcement/postUpdate', 'AnnouncementController@update')->name('announcement.update');
        Route::get('/deleteAnnouncement/{id}','AnnouncementController@destroy');

        Route::patch('job/postUpdate', 'JobPostController@update')->name('jobPost.update');
        Route::get('/deleteJobPost/{id}','JobPostController@destroy');

        //View Profiles
        Route::get('/viewStudentProfile/{id}','StudentController@viewStudentProfile');
        Route::view('/student/viewprofile', 'user.student.viewprofile');
        Route::get('/viewAlumnusProfile/{id}','StudentController@viewStudentProfile');
        Route::view('/alumnus/viewprofile', 'user.alumnus.viewprofile');
        Route::get('/viewTeacherProfile/{id}','TeacherController@viewTeacherProfile');
        Route::view('/teacher/viewprofile', 'user.teacher.viewprofile');

        //IMAGE VIEW ON ANNOUNCEMENTS AND JOB POSTS
        Route::get('/imageView/{id}','HomeController@imageView')->name('imageView');        
    }); 


    // Student
    Route::group(['middleware' => 'student'], function () {  
        Route::get('/student/profile', 'StudentController@index')->name('student.profile');
        Route::patch('/student/description', 'DescriptionController@update')->name('student.description.update');
        Route::post('student/skill', 'UserSkillController@store')->name('student.skill.add');
        Route::post('student/achievement', 'AchievementController@store')->name('student.achievement.add');
        
        Route::get('/student/class', 'StudentController@listOfClasses')->name('user.student.class');
        Route::get('/viewClass/{id}', 'StudentController@viewClass')->name('view.class');
        Route::get('/searchClass', 'StudentController@searchClass')->name('searchClass.searchClass');
        Route::post('/joinClass', 'StudentController@joinClass')->name('join.Class');
      

        Route::get('/deleteSSkill/{id}','StudentController@destroySkill');
        Route::get('/deleteSAchv/{id}','StudentController@destroyAchv');
        // Communication
        Route::get('/student/chat', 'ContactsController@user')->name('StudentCommunicate');
        Route::post('/student/recipient', 'ContactsController@show')->name('student.recipient'); 

    });

    // Alumnus
    Route::group(['middleware' => 'alumnus'], function () {  
      
        Route::get('/alumnus/profile', 'AlumnusController@alumnusProfile')->name('alumnus.profile');
        Route::get('/alumnus/jobs', 'AlumnusController@alumnusJobs')->name('alumnus.jobs');
        Route::get('/alumnus/communicate', 'AlumnusController@alumnusCommunicate')->name('alumnus.communicate');
        Route::patch('alumnus/description', 'DescriptionController@update')->name('alumnus.description.update');
        Route::post('alumnus/skill', 'UserSkillController@store')->name('alumnus.skill.add');
        Route::post('alumnus/achievement', 'AchievementController@store')->name('alumnus.achievement.add');
        //Alumnus Form Routes
        Route::get('/alumnus/form', 'GTSController@alumnusForm')->name('alumnus.form');  
        Route::get('/alumnus/form/{id}/edit','GTSController@edit')->name('alumnus.form.edit');
        Route::post('/alumnus/form','GTSController@store')->name('alumnus.form.store');
        Route::patch('/alumnus/form/{id}/update','GTSController@update')->name('alumnus.form.update');;

        Route::view('/alumnus/maptest', 'user.alumnus.map');
        Route::get('/deleteASkill/{id}','AlumnusController@destroySkill');  
        Route::get('/deleteAAchv/{id}','AlumnusController@destroyAchv'); 
        //Communication
        Route::get('/alumnus/chat', 'ContactsController@user')->name('AlumnusCommunicate');
        Route::post('/alumnus/recipient', 'ContactsController@show')->name('alumnus.recipient'); 

        Route::get('alumnus/occupation','OccupationController@create')->name('occupation.form');
        Route::post('alumnus/occupation','OccupationController@store')->name('occupation.store');

    });

    
    // Teacher
    Route::group(['middleware' => 'teacher'], function () {

        Route::get('/teacher/profile', 'TeacherController@index')->name('teacher.profile');
        Route::patch('/teacher/description', 'DescriptionController@update')->name('teacher.description.update');
        Route::post('/teacher/achievement', 'AchievementController@store')->name('teacher.achievement.add');
        
        Route::get('/teacher/class', 'TeacherController@listOfClasses')->name('user.teacher.class');
        Route::get('/viewClassTeacher/{id}', 'TeacherController@viewClass')->name('view.class.teacher');
        Route::post('/classPost', 'TeacherController@classPost')->name('class.post');
        Route::patch('class/postUpdate', 'TeacherController@updateClassPost')->name('classPost.update');
        Route::get('/delClassPost/{id}','TeacherController@destroyClassPost');

        Route::get('/deleteTAchv/{id}','TeacherController@destroyAchv');   

        // Communication
        Route::get('/teacher/chat', 'ContactsController@user')->name('TeacherCommunicate');
        Route::post('/teacher/recipient', 'ContactsController@show')->name('teacher.recipient'); 
    });
    

    // Admin
    Route::group(['middleware' => 'admin'], function () { 
        // Admin Index
        Route::view('/admin', 'user.admin.index')->name('admins');
        // Requests Controller
        Route::get('/student/requests', 'Admin\StudentRequestController@index')->name('ShowStudentRequest');
        // User Controller
        Route::get('/user/students', 'Admin\UserController@students')->name('ShowStudents');
        Route::get('/user/alumni', 'Admin\UserController@alumni')->name('ShowAlumni');
        Route::get('/user/teachers', 'Admin\UserController@teachers')->name('ShowTeachers');
        Route::get('/user/coordinators', 'Admin\UserController@coordinators')->name('ShowCoordinators');
        Route::get('/user/chairs', 'Admin\UserController@chairs')->name('ShowChairs');
        Route::get('/user/admins', 'Admin\UserController@admins')->name('ShowAdmins');
        Route::post('/user/store', 'Admin\UserController@store')->name('StoreUser');
        Route::patch('/user/update', 'Admin\UserController@update')->name('UpdateUser');
        Route::delete('/user/delete', 'Admin\UserController@destroy')->name('DeleteUser');
        // School Management Controller
        Route::get('/SM/classes', 'Admin\SchoolMgmtController@classes')->name('ShowClasses');
        Route::post('/SM/store', 'Admin\SchoolMgmtController@storeClass')->name('StoreClass');
        Route::post('/SM/store/subject', 'Admin\SchoolMgmtController@storeSubject')->name('StoreSubject');
        Route::post('/SM/store/semester', 'Admin\SchoolMgmtController@storeSemester')->name('StoreSemester');
        Route::post('/SM/store/year', 'Admin\SchoolMgmtController@storeYear')->name('StoreYear');
        Route::patch('/SM/update', 'Admin\SchoolMgmtController@updateClass')->name('UpdateClass');
        Route::patch('/SM/update/subject', 'Admin\SchoolMgmtController@updateSubject')->name('UpdateSubject');
        Route::patch('/SM/update/semester', 'Admin\SchoolMgmtController@updateSemester')->name('UpdateSemester');
        Route::patch('/SM/update/year', 'Admin\SchoolMgmtController@updateYear')->name('UpdateYear');
        Route::delete('/SM/destroy', 'Admin\SchoolMgmtController@destroyClass')->name('DeleteClass');
        Route::delete('/SM/destroy/subject', 'Admin\SchoolMgmtController@destroySubject')->name('DeleteSubject');
        Route::delete('/SM/destroy/semester', 'Admin\SchoolMgmtController@destroySemester')->name('DeleteSemester');
        Route::delete('/SM/destroy/year', 'Admin\SchoolMgmtController@destroyYear')->name('DeleteYear');
        Route::post('/SM/students', 'Admin\SchoolMgmtController@studentClass')->name('StudentClass');
        Route::post('/SM/store/student', 'Admin\SchoolMgmtController@storeStudent')->name('StoreStudent');
        Route::delete('/SM/remove/student', 'Admin\SchoolMgmtController@removeStudent')->name('RemoveStudent');
        Route::get('/SM/school', 'Admin\SchoolMgmtController@school')->name('ShowSchool');
        Route::post('/SM/school/store', 'Admin\SchoolMgmtController@storeSchool')->name('StoreSchool');
        Route::post('/SM/department/store', 'Admin\SchoolMgmtController@storeDepartment')->name('StoreDepartment');
        Route::post('/SM/course/store', 'Admin\SchoolMgmtController@storeCourse')->name('StoreCourse');
        Route::patch('/SM/school/update', 'Admin\SchoolMgmtController@updateSchool')->name('UpdateSchool');
        Route::patch('/SM/department/update', 'Admin\SchoolMgmtController@updateDepartment')->name('UpdateDepartment');
        Route::patch('/SM/course/update', 'Admin\SchoolMgmtController@updateCourse')->name('UpdateCourse');
        Route::delete('/SM/school/delete', 'Admin\SchoolMgmtController@destroySchool')->name('DeleteSchool');
        Route::delete('/SM/department/delete', 'Admin\SchoolMgmtController@destroyDepartment')->name('DeleteDepartment');
        Route::delete('/SM/course/delete', 'Admin\SchoolMgmtController@destroyCourse')->name('DeleteCourse');
        // Bulletin Controller
        Route::get('/bulletin', 'Admin\BulletinController@index')->name('ShowPosts');
        Route::get('/bulletin/create', 'Admin\BulletinController@create')->name('CreatePost');
        Route::post('/bulletin/store', 'Admin\BulletinController@store')->name('StorePost');
        Route::get('/bulletin/edit/{id}', 'Admin\BulletinController@edit')->name('EditPost');
        Route::patch('/bulletin/update', 'Admin\BulletinController@update')->name('UpdatePost');
        Route::delete('/bulletin/delete', 'Admin\BulletinController@destroy')->name('DeletePost');
        Route::post('/bulletin/store/filter', 'Admin\BulletinController@storeFilter')->name('StoreFilter');
        Route::get('/bulletin/delete/filter/{id}', 'Admin\BulletinController@destroyFilter')->name('DeleteFilter');
        // Tracking Controller
        Route::get('/track/nation', 'Admin\TrackController@nationwide')->name('ShowNation');
        Route::get('/track/unitedstates', 'Admin\TrackController@unitedstates')->name('ShowUS');
        Route::get('/track/world', 'Admin\TrackController@worldwide')->name('ShowWorld');
        Route::post('/track/load', 'Admin\TrackController@loadCountry')->name('LoadCountry');
        //Communication
        Route::get('/admin/chat', 'ContactsController@index')->name('Communication');
        Route::post('/admin/chat/store', 'ContactsController@store')->name('StoreChat');
        // Route::get('/contacts', 'ContactsController@get');
        // Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
        // Route::post('/conversation/send', 'ContactsController@send');
        Route::get('/live_search/action', 'ContactsController@liveSearch')->name('live_search.action'); 
        Route::post('/store/recipient', 'ContactsController@add')->name('store.recipient'); 
        Route::post('/show/recipient', 'ContactsController@show')->name('show.recipient'); 
    });
    Route::get('/contacts', 'ContactsController@get');
    Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
    Route::post('/conversation/send', 'ContactsController@send');

// Resources ==============================================================

    //Student


    // Teacher

    // Admin
    Route::resource('registration', 'Admin\UserRegistrationController', 
    ['only' => ['index', 'edit', 'update', 'destroy']]);

    Route::get('authenticate/passwords/changepassword/{id}', 'ChangePasswordController@showChangePass')->name('showchangepass');
    Route::patch('authenticate/passwords/changepassword/{id}', 'ChangePasswordController@changePassword')->name('dochangepassword');

});