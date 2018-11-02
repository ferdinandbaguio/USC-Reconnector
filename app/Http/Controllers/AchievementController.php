<?php

namespace App\Http\Controllers;
use App\Http\Requests\AchievementRequest;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Achievement;
class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::where('id',Auth::user()->id)->get();
        dd($achievements);
        return view('user.teacher.profile', compact('achievements')); 

    }
    public function store(AchievementRequest $request)
    {
        $data = $this->validate($request,[
            'user_id' => 'nullable',
            'achTitle' => 'required',
            'achYear' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;

        Achievement::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
