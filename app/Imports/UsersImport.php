<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;

    public function model(array $row)
    {  
        $pictureMaleValues   = ['default_male.png', 
                                'default_male1.png', 
                                'default_male2.png'];
        $pictureFemaleValues = ['default_female.png', 
                                'default_female1.png', 
                                'default_female2.png'];
        $random = rand(0, 2);

        if($row['gender'] == 'Male'){
            $picture = $pictureMaleValues[$random];
        }
        else if($row['gender'] == 'Female'){
            $picture = $pictureFemaleValues[$random];
        }      
        return new User([
            'idnumber'         => $row['id_number'],
            'password'         => $row['id_number'],
            'lastName'         => $row['last_name'], 
            'firstName'        => $row['first_name'], 
            'middleName'       => $row['middle_name'], 
            'email'            => $row['email_address'], 
            'yearLevel'        => $row['year_level'], 
            'sex'              => $row['gender'],
            'picture'          => $picture,
            'userType'         => 'Student',
            'userStatus'       => 'Approved',
            'employmentStatus' => 'Unemployed(Never)',
        ]);
    }

    public function rules(): array
    {
        return [
            '*.id_number'       => 'required|unique:users,idnumber|digits:8',
            '*.last_name'       => 'required|alpha',
            '*.first_name'      => 'required|alpha',
            '*.middle_name'     => 'nullable|alpha',
            '*.email_address'   => 'required|email',
            '*.year_level'      => 'required|numeric|min:1|max:5',
            '*.gender'          => ['required', Rule::in(['Male', 'Female'])],
        ];
    }
}
