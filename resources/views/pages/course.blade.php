@extends('layouts.master')

@section('title' , 'Courses Page')

@section('main')
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Courses
    </div>

    <div class="container text-center my-5 ">
        @if(count($events) > 0) 
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3"
                         style="max-width: 25rem;">
                            <div class="card-header">
                                {{$event->title}}
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">
                                Course Price {{$event->price}}
                              </h5>
                              <hr>
                              <p class="card-text">
                                {{$event->desc}}
                              </p>
                              <hr>
                              <hr>
                              <p class="card-text">
                                {{$event->Number}}
                              </p>
                              <hr>
                              <div class="alert alert-secondary rounded py-3 my-3">
                                Created At {{$event->created_at}} By <br>
                                <strong class="text-warning">{{$event->speaker}}</strong>
                              </div>
                              <hr>
                              <a href="{{'/events/' . $event->id}}" class="btn btn-md btn-primary my-2 mx-1">show</a>
                              <a href="{{'/events/' . $event->id . '/edit'}}" class="btn btn-md btn-success my-2 mx-1">edit</a>                             
                             <form action="{{route('destroy', ['id' => $event->id])}}" method="POST">
                              @method('DELETE')
                              @csrf                              
                              <button type="submit"                              
                              class="btn btn-danger">delete</button>                            
                              </form>
                            </div>
                          </div>
                    </div>
                @endforeach

            </div>
        @endif
        <div class="row my-4 d-flex justify-content-center">
            {{$events->links()}}
        </div>
    </div>
@endsection