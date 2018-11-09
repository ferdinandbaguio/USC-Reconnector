<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Company;
use App\Models\Country;
use App\Models\Occupation;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\OccupationRequest;
class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Occupation;
        $countries = Country::orderBy('name','asc')->pluck('name', 'id')->all();
        $data = compact('form','countries');
        return view('user.alumnus.occupationform',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->occupationTitle);
        $request->validate([
            'occupationTitle' => 'required',
            'occupationAddress' => 'required',
            'salaryRangeOne' => 'required',
            'salaryRangeTwo' => 'required',
            'jobStart' => 'required',
            'jobEnd' => 'required',
            'countries' => 'required',
            'area_code' => 'required',
            'area_name' => 'required',
            'area_address' => 'required',
            'area_value' => 'required',
            'area_countries' => 'required',
            'companyName' => 'required',
            'companyAddress' => 'required',
            'companyDescription' => 'required',
            'company_countries' => 'required',
            'company_area_code' => 'required',
            'company_area_name' => 'required',
            'company_area_address' => 'required',
            'company_area_value' => 'required',
            'company_countries_area' => 'required'
        ],
        [
            'occupationTitle.required' => 'This field is required',
            'occupationAddress.required' => 'This field is required',
            'salaryRangeOne.required' => 'This field is required',
            'salaryRangeTwo.required' => 'This field is required',
            'jobStart.required' => 'This field is required',
            'jobEnd.required' => 'This field is required',
            'countries.required' => 'This field is required',
            'area_code.required' => 'This field is required',
            'area_name.required' => 'This field is required',
            'area_address.required' => 'This field is required',
            'area_value.required' => 'This field is required',
            'area_countries.required' => 'This field is required',
            'companyName.required' => 'This field is required',
            'companyAddress.required' => 'This field is required',
            'companyDescription.required' => 'This field is required',
            'company_countries.required' => 'This field is required',
            'company_area_code.required' => 'This field is required',
            'company_area_name.required' => 'This field is required',
            'company_area_address.required' => 'This field is required',
            'company_area_value.required' => 'This field is required',
            'company_countries_area.required' => 'asdasdasdsacompany_countries_area This field is required'

        ]);
        // $companyRequest['area_countries'] = Country::where('id',$request->area_countries)->first();

        // $company_area = Area::create([
        //     'country_id' => $company_country_area->id,
        //     'code'       => $request->company_area_code,
        //     'name'       => $request->company_area_name,
        //     'value'      => $request->company_area_value
        // ]);
    
        // $company_country = Country::where('id',$request->company_countries)->first();
        // $company = Company::create([
        //     'name' => $request->companyName,
        //     'address' => $request->companyAddress,
        //     'description' => $request->companyDescription,
        //     'picture' => 'default_male.png' ,
        //     'linkage_id' => null,
        //     'country_id' => $company_country->id,
        //     'area_id' => $company_area->id
        // ]);   
        
        // $area_country = Country::where('id',$request->area_countries)->first();
        
        // $area = Area::create([
        //     'country_id' => $area_country->id,
        //     'code'       => $request->area_code,
        //     'name'       => $request->area_name,
        //     'value'      => $request->area_value
        // ]);
        // $country = Country::where('id',$request->countries)->first();
        // $occupation = Occupation::create([
        //     'title' => $request->occupationTitle,
        //     'address' => $request->occupationAddress,
        //     'salaryRangeOne' => str_replace(',', '',$request->salaryRangeOne),
        //     'salaryRangeTwo' => str_replace(',', '', $request->salaryRangeTwo),
        //     'jobStart' => $request->jobStart,
        //     'jobEnd' => $request->jobEnd,
        //     'country_id' => $country->id,
        //     'area_id' => $area->id,
        //     'company_id' => $company->id,
        //     'alumni_id' => Auth::user()->id
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Occupation $occupation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Occupation $occupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Occupation $occupation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupation $occupation)
    {
        //
    }
}
