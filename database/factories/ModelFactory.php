<?php

// use DB;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    $pictureMaleValues = ['default_male.png', 'default_male1.png', 'default_male2.png'];
    $pictureFemaleValues = ['default_female.png', 'default_female1.png', 'default_female2.png'];
    $employmentStatus = ['Male', 'Female'];
    $sexValues = ['Male', 'Female'];
    $statusValues = ['Approved', 'Pending','Denied'];               
    $updateStatusValues = ['Updated', 'Outdated', 'Recent'];
    $employmentStatusValues = ['Full-Time Job', 'Unemployed', 'Part-Time Job'];
    $roleValues= ['Student', 'Teacher', 'Alumnus', 'Admin', 'Coordinator', 'Chair'];
    
    $sex = $faker->randomElement($sexValues);
    if($sex == 'Male'){
        $picture = $faker->randomElement($pictureMaleValues);
    }
    else if($sex == 'Female'){
        $picture = $faker->randomElement($pictureFemaleValues);
    }

    $idnumber = '14'.$faker->unique()->numberBetween($min = 100000 , $max = 999999);
    
    return [
        'idnumber'      => $idnumber,
        'picture'       => $picture,
        'email'         => $faker->email,
        'password'      => $idnumber,
        'sex'           => $sex,
        'firstName'     => $faker->firstName,
        'middleName'    => $faker->lastName,
        'lastName'      => $faker->lastName,
        'email'         => $faker->firstName.'.'.$faker->lastName.'@gmail.com',
        'description'   => $faker->paragraph,
        'yearLevel'     => $faker->numberBetween($min = 1, $max = 5),    
        'userType'      => $faker->randomElement($roleValues),
        'userStatus'	=> $faker->randomElement($statusValues),
        // 'department_id'	=> 1,
        // 'course_id'	    => rand(5, 7),
        'remember_token'=> str_random(10),
        'updateStatus'	=> $faker->randomElement($updateStatusValues),
        'employmentStatus'	=> $faker->randomElement($employmentStatusValues),
    ];
});

// $factory->define(App\Models\Subject::class, function (Faker $faker) {
//     $codeElements = ['Sci ', 'Fre ', 'Hist ', 'Nih ', 'Polsc '];
//     $nameElements = ['Science ', 'French ', 'History ', 'Japanese ', 'Politics '];
//     $index = $faker->numberBetween($min=0, $max=4);
//     $lvlIndex = $faker->numberBetween($min=1, $max=35);
//     return [
//         'code'        => $codeElements[$index].$lvlIndex,
//         'name'        => $nameElements[$index].$lvlIndex,
//         'description' => $faker->paragraph,
//     ];
// });

// $factory->define(App\Models\Group_Class::class, function (Faker $faker) {
//     $room_1 = $faker->randomLetter();
//     $room_2 = $faker->randomLetter();
//     $statusElements = ['Upcoming', 'Ongoing', 'Finished', 'Dissolved'];
//     $subject_id = DB::table('subjects')->select('id')->get();
//     $teacher_id = DB::table('users')->select('id')->where('userType', '=', 'Teacher')->get();
//     return [
//         'room'       => strtoupper($room_1.$room_2).' '.$faker->numberBetween($min=100, $max=599),
//         'status'     => $faker->randomElement($statusElements),
//         'subject_id' => $faker->randomElement($subject_id),
//         'teacher_id' => $faker->randomElement($teacher_id),
//     ];
// });

// $factory->define(App\Models\Year::class, function (Faker $faker) {
//     return [
//         'name' => $faker->numberBetween($min=1960, $max=2020),
//     ];
// });

// $factory->define(App\Models\Semester::class, function (Faker $faker) {
//     $nameElements = ['1st Semester', '2nd Semester', '1st Trimester', '2nd Trimester', '3rd Trimester', 'Summer'];
//     $year_id = DB::table('years')->select('id')->get();
//     return [
//         'name'    => $faker->randomElement($nameElements),
//         'year_id' => $faker->randomElement($year_id),
//     ];
// });

// $factory->define(App\Models\Schedule::class, function (Faker $faker) {
//     $semester_id = DB::table('semesters')->select('id')->get();
//     return [
//         'day'         => $faker->dayOfWeek(),
//         'class_start' => $faker->time($format = 'H:i'),
//         'class_start' => $faker->time($format = 'H:i'),
//         'semester_id' => $faker->randomElement($semester_id),
//     ];
// });

// $factory->define(App\Models\Group_Schedule::class, function (Faker $faker) {
//     $group_class_id = DB::table('group_classes')->select('id')->get();
//     $schedule_id = DB::table('schedules')->select('id')->get();
//     return [
//         'group_class_id' => $faker->randomElement($group_class_id),
//         'schedule_id'    => $faker->randomElement($schedule_id),
//     ];
// });

// $factory->define(App\Models\Student_Class::class, function (Faker $faker) {
//     $group_class_id = DB::table('group_classes')->select('id')->get();
//     $student_id = DB::table('users')->select('id')->where('userType', '=', 'Student')->get();
//     return [
//         'group_class_id' => $faker->randomElement($group_class_id),
//         'student_id'     => $faker->randomElement($student_id),
//     ];
// });