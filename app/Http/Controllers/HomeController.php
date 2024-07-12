<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id())
        {
            $post=Post::where('post_status','=','active')->get();
            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('home.homepage',compact('post'));
            }
            else if($usertype=='admin')
            {
                return view('admin.admin_home');
            }
            else{
                return redirect()->back();
            }
        }
    }
public function homepage(){
    $post=Post::where('post_status','=','active')->get();
    return view('home.homepage',compact('post'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function post_details($id)

    {
        $post=Post::find($id);
        return view('home.post_details',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create_post(Request $request)
    {
        return view('home.create_post');
    }

    /**
     * Display the specified resource.
     */
    public function user_post(Request $request)
    {
        $user=Auth()->user();
        $user_id=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $post=new Post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_status='pending';

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
     * Show the form for editing the specified resource.
     */

     public function my_post()
     {
        $user=Auth::user();
        $userid=$user->id;
        $data=Post::where('user_id','=',$userid)->get();
         return view('home.my_post',compact('data')); 
     }
    public function my_post_delete(string $id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   
}
