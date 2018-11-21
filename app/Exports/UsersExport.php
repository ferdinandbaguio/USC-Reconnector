<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


// From Collection Class
    // class UsersExport implements FromCollection, Responsable
    // {
    //     use Exportable;

    //     private $fileName = 'users.csv';

    //     public function collection()
    //     {
    //         return User::all();
    //     }
    // }

// From Query Class
    // class UsersExport implements FromQuery, Responsable
    // {
    //     use Exportable;

    //     private $fileName = 'users.csv';

    //     public function __construct(string $sex)
    //     {
    //         $this->sex = $sex;
    //     }

    //     public function query()
    //     {
    //         return User::query()->where('sex', '=', $this->sex);
    //     }
    // }
// From View Class
    class UsersExport implements FromView, Responsable
    {   
        use Exportable;

        private $fileName = 'users.csv';

        public function view(): View
        {
            $users = User::all();
            $parameters = ['page'=>'page','users'=>$users];
            return view('user.admin.requests.bulkregistration', $parameters);
        }
    }