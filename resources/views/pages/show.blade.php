@extends('layouts.master')

@section('title' , 'Details  Page')

@section('main')
    <div class="alert alert-dark text-center py-3 my-5 container w-50 fs-4">
        Event Details
    </div>
    <section class="container w-50 mx-auto bg-light shadow rounded border text-center my5 p-5">
        <h2>Event Title : {{$event->title}}</h2>
        <hr>
        <p> Event Price: {{$event->price}} $ <br>
        {{$event->desc}}</p>
        <div class="alert alert-secondary rounded py-3 my-3">
        Created At {{$event->created_at}} By <br>
        <strong class="text-warning">{{$event->speaker}}</strong>
        </div>
        <hr>
        <a href="/events">Return to courses page</a>
        
        </section>
@endsection