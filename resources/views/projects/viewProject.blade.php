@extends('navbar.navbar')
@section('content')
@section('titulo','View project')
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <h3 class="text-muted mb-3 text-center" style="font-size: 2rem;"></h3>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-10 text-center">
            <img src="{{asset($project->photo)}}" style="width:36%; height:250px;" class="rounded" alt="{{$project->title}}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            @foreach ($users as $user)
                {{$user->first_name}} {{$user->last_name}}
            @endforeach
            <p ALIGN="justify">{!! nl2br(e($project->summary)) !!}</p>
        </div>
    </div>
</div>
@endsection


