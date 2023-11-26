
@extends('layouts.master')

@section('title' , 'Edit Course Page')

@section('main')
    <div class="alert alert-success text-center
     py-3 my-5 container w-50 fs-4">
     Edit Course 
    </div>

    <div class="container my-5 w-50 mx-auto">
        <form action="{{'/events/' . $event->id . '/update'}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-3">
                <label for="title">Course Title</label>
                <input type="text" class="form-control" 
                id="title" name="title"
                value="{{$event->title}}"></div>
            <div class="form-group my-3">
                <label for="speaker">Course Speaker</label>
                <input type="text" class="form-control"
                 id="speaker" name="speaker"
                 value="{{$event->speaker}}"></div>
            <div class="form-group my-3">
                <label for="price">Course Price</label>
                <input type="number" class="form-control" id="price" name="price"
                value="{{$event->price}}"></div>
            <div class="form-group my-3">
                <label for="desc">Course Description</label>
                <textarea type="text" class="form-control" id="desc" 
                name="desc">
                {{$event->desc}}
            </textarea>
            </div>
            <input type="submit" value="Edit Course" class="btn btn-success my-2">
        </form>
    </div>
@endsection