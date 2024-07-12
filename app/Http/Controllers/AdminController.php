<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function post_page()
    {
        return view('admin.post_page');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function add_post(Request $request)
    {

        $user=Auth()->user();
        $user_id=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_status='active';

        $post->user_id=$user_id;
        $post->usertype=$usertype;
        $post->name=$name;

        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image=$imagename;
        }
        
         $post->save();
        return redirect()->back()->with('message','Post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show_post()
    {
        $post=Post::all();
        return view('admin.show_post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_page(string $id)
    {
        $post=Post::find($id);
        return view('admin.edit_page',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_post(Request $request, string $id)
    {
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $data->image=$imagename;
        }
        
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_post(string $id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function accept_post(string $id)
    {
        $data=Post::find($id);
        $data->post_status='active';
        $data->save();
        return redirect()->back();
    }

    public function reject_post(string $id)
    {
        $data=Post::find($id);
        $data->post_status='rejected';
        $data->save();
        return redirect()->back();
    }


}

