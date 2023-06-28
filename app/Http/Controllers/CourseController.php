<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Show all courses
    public function index(){
        return view('courses',[
            'courses'=>AllCourses::latest()->filter(request()->only(['search']))->get()
        ]);
    }

    //Show single course
    public function show($id){
        return view('course',[
            'course'=>AllCourses::find($id)
        ]);
    }

    public function create(){
        return view('addcourse');
    }

    public function store(Request $request){
        //ddd($request->all());
        //dd($request->file('icon'));
        $attributes = request()->validate([
            'title' => 'required|unique:all_courses,title',
            'tags'=>'required',
            'icon' => 'file|mimes:jpeg,png|max:102400',
            'url'=>'required',
            'description'=>'required'
        ]);




        $user = auth()->user(); // Get the authenticated user

        $attributes['author_id'] = $user->id; // Set the author ID to the authenticated user's ID
        $attributes['author'] = $user->username; // Set the author's username

        if($request->hasFile('icon')){
            $attributes['icon']=$request->file('icon')->store('icon','public');
        }
        //  $filename=$request->file('icon')->getClientOriginalName();
        //  $request->file('icon')->storeAs('public/icon',$filename);
        //  echo $filename;
        //  $attributes['icon']=$filename;


         AllCourses::create($attributes);
         return redirect('/home/courses');
    }
}
