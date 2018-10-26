<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BulletinController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('user.admin.bulletin.posts')->with('posts', $posts);
    }
    public function create()
    {
        return view('user.admin.bulletin.create');
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
        
        return redirect('/bulletin')->with('success', 'Created Post: Successful!');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('user.admin.bulletin.edit')->with('post', $post);
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request)
    {
        Post::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Post: Successfull');
    }
}
