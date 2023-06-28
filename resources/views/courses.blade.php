@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
  <link rel="stylesheet" href="{{asset('css/courses.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
   

    <style>
        .courses{
            margin-top: 2.8rem;
        }

        nav{
            right: 0;
        }
    </style>
@endsection



@section('content')


 <div class="search">
    <form action="">
        <input type="text"
            placeholder=" Search Courses"
            name="search">
        <button>
            <i class="fa fa-search"
                style="font-size: 18px;">
            </i>
        </button>
    </form>
</div>



<section class="courses">
    <div class="container courses__container">

        @section('content')
        {{-- @unless (count($courses)==0) --}}
        @foreach ($courses as $course)

        <article class="course">
            <div class="course__image">
                <img src="{{asset('images/course1.jpg')}}">
            </div>
        <div class="course__info">
            <h4>{{$course->title}}</h4>
            <p>
                {{$course->description}}
                            </p>
            <a href="/home/courses/{{$course['id']}}" class="btn btn-primary">Learn more</a>
        </div>
        </article>
        @endforeach

    </div>
</section>

     {{-- {{$courses->links()}}  --}}


    {{-- @else
<p>No courses found</p> --}}

{{-- @endunless --}}

    <!-- ----------------------END OF COURSES-------------------- -->



@endsection





