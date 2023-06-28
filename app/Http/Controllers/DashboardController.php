<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showdashboard(){
        $recents = User::orderBy('created_at', 'desc')->take(10)->get();
        $data=compact('recents');
        return view('dashboard')->with($data);
    }

    public function showorders(){
        return view('dashboard_orders');
    }

    public function showstudents(){
        $students=User::where('role', 'Student')->get();
        // echo "<pre>";
        // print_r($instructors);
        // echo "<pre>";
        // die;

        $data=compact('students');
        return view('dashboard_students')->with($data);

    }

    public function destroystudents($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home/dashboard/students')->with('success', 'User deleted successfully');
    }

    public function showinstructors(){
        $instructors=User::where('role', 'Teacher/Admin')->get();
        // echo "<pre>";
        // print_r($instructors);
        // echo "<pre>";
        // die;

        $data=compact('instructors');
        return view('dashboard_instructors')->with($data);
    }

    public function destroyinstructors($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home/dashboard/instructors')->with('success', 'User deleted successfully');
    }

    public function showmessages(){
        return view('dashboard_messages');
    }

    public function showcourses(){
        $courses = AllCourses::orderBy('created_at', 'desc')->get();
        $data=compact('courses');
        return view('dashboard_courses')->with($data);
    }

    public function destroycourses($id){
        $item = AllCourses::findOrFail($id);
        $item->delete();

        return redirect('/home/dashboard/courses')->with('success', 'Item deleted successfully');
    }

    public function updatecourses($id){

    }

    public function showcomments(){
        return view('dashboard_comments');
    }
}
