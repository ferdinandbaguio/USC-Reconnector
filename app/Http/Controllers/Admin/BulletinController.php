<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\School;
use App\Models\Course;
use App\Models\Filter;
use App\Models\Department;
use App\Models\Group_Class;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BulletinController extends Controller
{
    public function index()
    {
        $filters = Filter::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
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
            $postToStore['picture'] = 'Post_Default.jpg';
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
            $postToStore['picture'] = $filenameToStore;
        }

        $postToStore['poster_id'] = $request->poster_id;
        $postToStore['title'] = $request->title;
        $postToStore['announcement'] = $request->announcement; 
        Post::create($postToStore);
        
        // $postTofilter = DB::table('schedules')->orderBy('created_at', 'desc')->first();

        return redirect('/bulletin')->with('success', 'Created Post: Successful!');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('user.admin.bulletin.edit')->with('post', $post);
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
            $postToUpdate['picture'] = $filenameToStore;
        }
        
        $postToUpdate['poster_id'] = $request->poster_id;
        $postToUpdate['title'] = $request->title;
        $postToUpdate['announcement'] = $request->announcement;
        $postID = Post::findOrFail($request->id);
        $postID->update($postToUpdate);

        return redirect('/bulletin')->with('success', 'Edited Post: Successfull');
    }
    public function destroy(Request $request)
    {
        Post::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Post: Successfull');
    }
    public function storeFilter(Request $request)
    {
        return $request;
        Filter::create();
        return redirect()->back()->with('success', 'Create Filter: Successfull');
    }
}
