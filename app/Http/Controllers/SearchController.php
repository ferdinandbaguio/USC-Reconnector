<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function filter (Request $request){

        $query = User::newQuery();
        
		if($request->name){
			$result = str_replace(' ','',$request->name);
			$query->where(DB::raw("CONCAT(`firstName`,`middleName`,`lastName`)"),'like',"%{$result}%");
		}else if($request->email){
	
			$query->where(DB::raw("`email`"),'like',"%{$request->email}%");
		}else if($request->role){
			$query->where(DB::raw("`role`"),'like',"%{$request->role}%");
		}
	}
}
