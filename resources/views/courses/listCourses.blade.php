@extends('navbar.navbar')
@section('content')
@section('titulo','Courses')

<?php 
    function edit_button ($id) {
        return '<a href='.route("courses.edit", $id).' role="button" class="btn btn-md btn-success float-right ml-1">Edit</a> ';
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach ($courses as $key => $course)
                    <a class="list-group-item list-group-item-action @if ($key === 0)active @endif" id="list-{{$key}}-list" data-toggle="list" href="#list-{{$key}}" role="tab" aria-controls="{{$key}}">{{$course->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($courses as $key => $course)
                    <div class="tab-pane fade @if ($key === 0)show active @endif" id="list-{{$key}}" role="tabpanel" aria-labelledby="list-{{$key}}-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset($course->photo)}}" class="Responsive image" alt="..." style="width:36%; height:250px;">
                                </div>
                                <hr>
                                <div class="container">
                                    <p class="text-break font-weight-light">{!! nl2br(e($course->description)) !!}</p>
                                    <div class="text-center"><a href="{{$course->url}}" target="_blank" class="btn btn-md btn-primary mt-2"><span class="glyphicon glyphicon-cloud-download"></span> <i class="fas fa-download"></i> Download</a></div>
                                </div>
                            </div>
                            @if (Auth::check())
                                <div class="card-footer">
                                    @if (session('role') == 0)
                                        {!! edit_button($course->pk_course) !!} 
                                        <form method="POST" action="{{route("courses.destroy", $course->pk_course)}}">
                                            {{ csrf_field() }}
                                            {{ method_field("DELETE") }}
                                                <input type="submit" class="btn btn-danger delete-user float-right ml-1" value="Delete">
                                        </form>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection