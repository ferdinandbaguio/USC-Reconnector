<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Company;
use App\Models\Country;
use App\Models\Occupation;
use Auth;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = new Occupation;
        
        $countries = Country::orderBy('name','asc')->pluck('name', 'id')->all();
        $data =compact('form','countries');

        return view('user.alumnus.occupationform',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $data =$request->validate([
            'occupationTitle' => 'required',
            'occupationAddress' => 'required',
            'salaryRangeOne' => 'required',
            'salaryRangeTwo' => 'required',
            'jobStart' => 'required',
            'jobEnd' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'countries' => 'required',
            'companyName' => 'required',
            'companyAddress' => 'required',
            'companyDescription' => 'required',
            'company_countries' => 'required',

        ],
        [
            'occupationTitle.required' => 'This field is required',
            'occupationAddress.required' => 'This field is required',
            'salaryRangeOne.required' => 'This field is required',
            'salaryRangeTwo.required' => 'This field is required',
            'jobStart.required' => 'This field is required',
            'jobEnd.required' => 'This field is required',
            'countries.required' => 'This field is required',
            'companyName.required' => 'This field is required',
            'companyAddress.required' => 'This field is required',
            'companyDescription.required' => 'This field is required',
            'company_countries.required' => 'This field is required'

        ]);
        
    
        $company_country = Country::where('id',$data['company_countries'])->first();
        $company = Company::create([
            'name' => $data['companyName'],
            'address' => $data['companyAddress'],
            'description' => $data['companyDescription'],
            'picture' => 'default_male.png' ,
            'linkage_id' => null,
            'country_id' => $company_country->id,
            'area_id' => null
        ]);   
        
        $country = Country::where('id',$data['countries'])->first();
        $occupation = Occupation::create([
            'title' => $data['occupationTitle'],
            'address' => $data['occupationAddress'],
            'salaryRangeOne' => str_replace(',', '',$data['salaryRangeOne']),
            'salaryRangeTwo' => str_replace(',', '', $data['salaryRangeTwo']),
            'jobStart' => $data['jobStart'],
            'jobEnd' => $data['jobEnd'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'country_id' => $country->id,
            'area_id' => null,
            'company_id' => $company->id,
            'alumni_id' => Auth::user()->id
        ]);
        return redirect()->back()->with('success','Create Successful Thank You!');
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
    public function edit($id)
    {
        $form = Occupation::whereId($id)->with(['company.country', 'country'])->first();
        $countries = Country::orderBy('name','asc')->pluck('name', 'id')->prepend('Select Country', '');
        $data =compact('form','countries');
        // dd($form->toArray());

        return view('user.alumnus.occupationform',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'occupationTitle' => 'required',
            'occupationAddress' => 'required',
            'salaryRangeOne' => 'required',
            'salaryRangeTwo' => 'required',
            'jobStart' => 'required',
            'jobEnd' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'countries' => 'required',
            'companyName' => 'required',
            'companyAddress' => 'required',
            'companyDescription' => 'required',
            'company_countries' => 'required',

        ],
        [
            'occupationTitle.required' => 'This field is required',
            'occupationAddress.required' => 'This field is required',
            'salaryRangeOne.required' => 'This field is required',
            'salaryRangeTwo.required' => 'This field is required',
            'jobStart.required' => 'This field is required',
            'jobEnd.required' => 'This field is required',
            'latitude.required' => 'This field is required',
            'longitude.required' => 'This field is required',
            'countries.required' => 'This field is required',
            'companyName.required' => 'This field is required',
            'companyAddress.required' => 'This field is required',
            'companyDescription.required' => 'This field is required',
            'company_countries.required' => 'This field is required'

        ]);

        $country = Country::where('id',$data['countries'])->first();
        $occupation = Occupation::whereId($id)->update([
            'title' => $data['occupationTitle'],
            'address' => $data['occupationAddress'],
            'salaryRangeOne' => str_replace(',', '',$data['salaryRangeOne']),
            'salaryRangeTwo' => str_replace(',', '', $data['salaryRangeTwo']),
            'jobStart' => $data['jobStart'],
            'jobEnd' => $data['jobEnd'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'country_id' => $country->id,
            'area_id' => null,
            'alumni_id' => Auth::user()->id
        ]);

        
    
        $company_country = Country::where('id',$data['company_countries'])->first();

        $occupation = Occupation::find($id);
        $company = $occupation->company()->update([
            'name' => $data['companyName'],
            'address' => $data['companyAddress'],
            'description' => $data['companyDescription'],
            'picture' => 'default_male.png' ,
            'linkage_id' => null,
            'country_id' => $company_country->id,
            'area_id' => null
        ]);   
        
       

        return redirect()->back()->with('success','Update Successful Thank You!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $occupation = Occupation::find($id);
        $occupation->delete();
        return redirect()->back()->with('success','Delete Successful Thank You!');
    }
}
