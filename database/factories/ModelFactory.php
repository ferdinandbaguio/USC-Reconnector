<?php

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
		$role= ['Student', 'Teacher',
	                    'Alumnus', 'Admin',
                        'Coordinator', 'Chair'];
        $userType = $faker->randomElement($role);
        $updateStatusValues = ['Updated', 'Outdated', 
            'Recent'];
        if($userType === 'Alumnus'){
            $updateStatus = $faker->randomElement($updateStatusValues);   
        }else{
            $updateStatus = null;
        }
        $statusValues = ['Approved', 'Pending','Denied'];    
                        
        $sexValues = ['Male', 'Female'];
        
	    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);
        $fname=$faker->firstName;
        $lname=$faker->lastName;
        $email = $lname.'.'.$fname.'@gmail.com';
	    return [
            'idnumber'      => $idnumber,
            'password'      => bcrypt($idnumber),
            'sex'           => $faker->randomElement($sexValues),
	        'firstName'     => $faker->firstName,
            'middleName'    => $fname,
            'lastName'      => $lname,
            'email'         => $lname.'.'.$fname.'@gmail.com',
            'description'   => $faker->paragraph,
            'yearLevel'     => '4',    
            'userType'      => $userType,
            'userStatus'	=> $faker->randomElement($statusValues),
            'updateStatus'  => $updateStatus,
	    ];
});