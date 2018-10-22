<?php

namespace App\Http\Controllers;
use App\Http\Requests\GTSRequest;
use Illuminate\Http\Request;
use App\GraduateTracerStudy;
use Auth;
use App\Models\User;

class GTSController extends Controller
{
    public function update (GTSRequest $request, $id) {
        // dd($request->advance_studies);
        $request->advance_studies ? $request['advance_studies'] = json_encode($request->advance_studies) : '';
        $request->reasonsYes ? $request['reasonsYes'] = json_encode($request->reasonsYes)  : '';
        $request->reasonsNo ? $request['reasonsNo'] = json_encode($request->reasonsNo) : '';
        $request->jobRolesExperienced ? $request['jobRolesExperienced'] = json_encode($request->jobRolesExperienced) : '';
        $request->conceptsLearned ? $request['conceptsLearned'] = json_encode($request->conceptsLearned): '';
        $request->reasonsUndergraduateCourse ? $request['reasonsUndergraduateCourse'] = json_encode($request->reasonsUndergraduateCourse) : '';
        $request->reasonUnemployedNow ? $request['reasonUnemployedNow'] = json_encode($request->reasonUnemployedNow) : ''; 
        $request->reasonUnemployedNever ? $request['reasonUnemployedNever'] = json_encode($request->reasonUnemployedNever) : '';
    	GraduateTracerStudy::where('id', $id)->update($request->except('_method','_token'));
        return redirect()->back();
    }
    
    public function store (GTSRequest $request) {

        $request['user_id'] = Auth::user()->id;
        $request->advance_studies ? $request['advance_studies'] = json_encode($request->advance_studies) : '';
        $request->reasonsYes ? $request['reasonsYes'] = json_encode($request->reasonsYes)  : '';
        $request->reasonsNo ? $request['reasonsNo'] = json_encode($request->reasonsNo) : '';
        $request->jobRolesExperienced ? $request['jobRolesExperienced'] = json_encode($request->jobRolesExperienced) : '';
        $request->conceptsLearned ? $request['conceptsLearned'] = json_encode($request->conceptsLearned): '';
        $request->reasonsUndergraduateCourse ? $request['reasonsUndergraduateCourse'] = json_encode($request->reasonsUndergraduateCourse) : '';
        $request->reasonUnemployedNow ? $request['reasonUnemployedNow'] = json_encode($request->reasonUnemployedNow) : ''; 
        $request->reasonUnemployedNever ? $request['reasonUnemployedNever'] = json_encode($request->reasonUnemployedNever) : '';
        
    	GraduateTracerStudy::create($request->all());
        return redirect()->back();
    }
    public function edit ($id) {

        $form = GraduateTracerStudy::find($id);

        $advancestudies_fm = json_decode($form->advance_studies);
        $reasonsYes_fm = json_decode($form->reasonsYes, true);
        $reasonsNo_fm = json_decode($form->reasonsNo, true);
        $jobRolesExperienced_fm = json_decode($form->jobRolesExperienced, true);
        $conceptsLearned_fm = json_decode($form->conceptsLearned, true);
        $reasonsUndergraduateCourse_fm = json_decode($form->reasonsUndergraduateCourse, true);
        $reasonUnemployedNow_fm = json_decode($form->reasonUnemployedNow, true);
        $reasonUnemployedNever_fm = json_decode($form->reasonUnemployedNever, true);
        $data = compact('form','advancestudies_fm','reasonsYes_fm','reasonsNo_fm','jobRolesExperienced_fm','conceptsLearned_fm','reasonsUndergraduateCourse_fm','reasonUnemployedNow_fm','reasonUnemployedNever_fm');
		return view('user.alumnus.form', array_merge(ApplicationConstantController::getGTSConstants(), $data)); 
        
    }
    
    public function alumnusForm()
    {
        $form = new GraduateTracerStudy;
        $data=compact('form');
        return view('user.alumnus.form', array_merge(ApplicationConstantController::getGTSConstants(), $data)); 
    }

}
