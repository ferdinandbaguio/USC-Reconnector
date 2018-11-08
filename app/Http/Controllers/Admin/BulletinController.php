<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\School;
use App\Models\Course;
use App\Models\Filter;
use App\Models\Department;
use App\Models\Group_Class;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BulletinController extends Controller
{
    public function index()
    {
        $filters = Filter::all();
        $posts = Announcement::orderBy('created_at', 'desc')->get();
        return view('user.admin.bulletin.posts')->with('posts', $posts)->with('filters', $filters);
    }
    public function create()
    {
        $schools = School::all();
        $courses = Course::all();
        $departments = Department::all();
        $group_classes = Group_Class::all();

        return view('user.admin.bulletin.create')->with('schools', $schools)->with('departments', $departments)
                                                 ->with('courses', $courses)->with('group_classes', $group_classes);
    }
    public function store(Request $request)
    {
        if(!isset($request['picture'])){
            $postToStore['image'] = 'Post_Default.jpg';
        }
        else{
            // Get Image
            $filenameWithExt = $request['picture']->getClientOriginalName();
            // Get Image Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Image Extention
            $extension = $request['picture']->getClientOriginalExtension();
            // Rename Image
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Save Path of Image
            $path = $request['picture']->storeAs('public/post_img', $filenameToStore);
            // Store Image to Database
            $postToStore['image'] = $filenameToStore;
        }
        $postToStore['user_id'] = $request->poster_id;
        $postToStore['title'] = $request->title;
        $postToStore['announcement'] = $request->announcement;

        Announcement::create($postToStore);

        if(isset($request->school_id) || isset($request->department_id) || isset($request->course_id) || isset($request->group_class_id)){
            if(isset($request->filter_option1))
                $filter['school_id'] = $request->school_id;
            if(isset($request->filter_option2))
                $filter['department_id'] = $request->department_id;
            if(isset($request->filter_option3))
                $filter['course_id'] = $request->course_id;
            if(isset($request->filter_option4))
                $filter['group_class_id'] = $request->group_class_id;

            $postToFilter = DB::table('announcements')->orderBy('created_at', 'desc')->first();
            $filter['announcement_id'] = $postToFilter->id;
            Filter::create($filter);
        }

        return redirect('/bulletin')->with('success', 'Created Post: Successful!');
    }
    public function edit($id)
    {
        $schools = School::all();
        $courses = Course::all();
        $departments = Department::all();
        $group_classes = Group_Class::all();
        $filters = Filter::where('announcement_id', '=', $id)->get();

        $post = Announcement::findOrFail($id);
        return view('user.admin.bulletin.edit')->with('post', $post)->with('schools', $schools)->with('departments', $departments)
                                               ->with('courses', $courses)->with('group_classes', $group_classes)->with('filters', $filters);
    }
    public function update(Request $request)
    {
        if(isset($request->picture)){
            // Get Image
            $filenameWithExt = $request['picture']->getClientOriginalName();
            // Get Image Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Image Extention
            $extension = $request['picture']->getClientOriginalExtension();
            // Rename Image
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Save Path of Image
            $path = $request['picture']->storeAs('public/post_img', $filenameToStore);
            // Store Image to Database
            $postToUpdate['image'] = $filenameToStore;
        }
        
        $postToUpdate['user_id'] = $request->poster_id;
        $postToUpdate['title'] = $request->title;
        $postToUpdate['announcement'] = $request->announcement;
        $postID = Announcement::findOrFail($request->id);
        $postID->update($postToUpdate);

        if(isset($request->school_id) || isset($request->department_id) || isset($request->course_id) || isset($request->group_class_id)){
            if(isset($request->filter_option1))
                $filter['school_id'] = $request->school_id;
            if(isset($request->filter_option2))
                $filter['department_id'] = $request->department_id;
            if(isset($request->filter_option3))
                $filter['course_id'] = $request->course_id;
            if(isset($request->filter_option4))
                $filter['group_class_id'] = $request->group_class_id;

            $postToFilter = DB::table('announcements')->orderBy('updated_at', 'desc')->first();
            $filter['announcement_id'] = $postToFilter->id;
            Filter::create($filter);
        }

        return redirect('/bulletin')->with('success', 'Edited Post: Successfull');
    }
    public function destroy(Request $request)
    {
        Announcement::destroy($request->id);
        $filters = Filter::where('announcement_id', '=', $request->id)->get();
        for($i = 0; $i < count($filters); $i++){
            Filter::destroy($filters[$i]->id);
        }
        return redirect()->back()->with('success', 'Deleted Post: Successfull');
    }
    public function storeFilter(Request $request)
    {
        if(isset($request->school_id) || isset($request->department_id) || isset($request->course_id) || isset($request->group_class_id)){
            if(isset($request->filter_option1))
                $filter['school_id'] = $request->school_id;
            if(isset($request->filter_option2))
                $filter['department_id'] = $request->department_id;
            if(isset($request->filter_option3))
                $filter['course_id'] = $request->course_id;
            if(isset($request->filter_option4))
                $filter['group_class_id'] = $request->group_class_id;
            $postToFilter = DB::table('posts')->orderBy('updated_at', 'desc')->first();
            $filter['announcement_id'] = $postToFilter->id;
            Filter::create($filter);
        }

        return redirect()->back()->with('success', 'Added Filter: Successfull');
    }
    public function destroyFilter($id)
    {
        Filter::destroy($id);

        return redirect()->back()->with('success', 'Deleted Filter: Successfull');
    }
}
