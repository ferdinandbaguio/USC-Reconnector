<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use App\Models\Country;
use App\Models\Company;
use App\Models\Occupation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\GraduateTracerStudy;

class TrackController extends Controller
{
    public function worldwide()
    {
        $countries = Country::all();
        $getCountryValue = Country::select('value')->get();
        $overall = DB::table('countries')->sum('value');
        $topctry = Country::orderBy('value', 'desc')->take(3)->get();
        if(count($topctry) == 3)
            $isTop3 = 'Present';
        else
            $isTop3 = 'Absent';
        return view('user.admin.tracking.worldwide')->with('countries', $countries)->with('overall', $overall)
                                                    ->with('topctry', $topctry)->with('getCountryValue', $getCountryValue)
                                                    ->with('isTop3', $isTop3);
    } 
    public function loadCountry(Request $request)
    {
        $country = json_decode($request->countryObject, true);
        DB::statement("SET foreign_key_checks=0");
        Country::truncate();
        DB::statement("SET foreign_key_checks=1");
        $usersWithOccupations = User::where('userStatus', '=', 'Approved')
                                    ->where('employmentStatus', '!=', 'Unemployed')
                                    ->where('userType', '=', 'Alumnus')->get();
        for($i = 0; $i < count($usersWithOccupations); $i++){
            if(count($usersWithOccupations[$i]->occupations) > 0){
                $countryID = $usersWithOccupations[$i]->occupations[count($usersWithOccupations[$i]->occupations)-1]->country_id;
                if(isset($countryValue[$countryID]))
                    $countryValue[$countryID]++;
                else
                    $countryValue[$countryID] = 1;
            }
        }
        for($i = 0; $i < count($country['code']); $i++){
            $CountryInstance['code'] = $country['code'][$i];
            $CountryInstance['flag'] = $country['flag'][$i];
            $CountryInstance['name'] = $country['ctry'][$i];
            if(isset($countryValue[$i+1]))
                $CountryInstance['value'] = $countryValue[$i+1];
            else
                $CountryInstance['value'] = 0;
            Country::create($CountryInstance);
        }
        return redirect()->back()->with('success', 'Countries had been Loaded');
    }
    public function alumnicompany()
    {
        $companies = Company::all();
        $countries = Country::all();

        return view('user.admin.tracking.alumnicompany')->with('companies', $companies)->with('countries', $countries);
    }
    public function storecompany(Request $request)
    {
        $comp['picture'] = '';
        $comp['name'] = $request->name;
        $comp['address'] = $request->address;
        $comp['country_id'] = $request->country_id;
        $comp['description'] = $request->description;

        Company::create($comp);
        return redirect()->back()->with('success', 'Company Created: Successful');
    }
    public function destroycompany(Request $request)
    {
        Company::destroy($request->id);
        return redirect()->back()->with('success', 'Company Deleted: Successful');
    }
    public function alumnidata(Request $request)
    {
        $gts = GraduateTracerStudy::all();

        return view('user.admin.tracking.alumnidata')->with('gts', $gts);
    }
    public function occupation(Request $request)
    {
        $companies = Companies::all();

        return view('user.admin.tracking.alumnicompany')->with('companies', $companies);
    }
    // public function unitedstates()
    // {
    //     return view('user.admin.tracking.unitedstates');
    // }
    // public function nationwide()
    // {       
    //     return view('user.admin.tracking.nationwide');
    // }
}
