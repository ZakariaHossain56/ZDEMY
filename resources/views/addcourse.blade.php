@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
   <link rel="stylesheet" href="{{ asset('css/addcourse.css') }}"/>

@endsection



@section('content')

<h1 class="add">Add a Course</h1>
<section class="contact">

    <div class="container contact__container">

<form action="/home/addcourse" method="POST" class="contact__form" enctype="multipart/form-data">
@csrf

<h4>Course title</h4>
<input type="text" name="title" placeholder="Course title" value="{{old('title')}}" required>

@error('title')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course tags(Comma separated)</h4>
<input type="text" name="tags" placeholder="Course tags" value="{{old('tags')}}" required>

@error('tags')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course icon</h4>
<input type="file" name="icon" placeholder="Course icon" value="{{old('icon')}}" required>

@error('icon')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Video URL</h4>
<input type="url" name="url" placeholder="Video url" value="{{old('url')}}" required>

@error('url')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course description</h4>
<textarea name="description" rows="7" placeholder="Course description" value="{{old('description')}}" required></textarea>

@error('description')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </section>

    @endsection
