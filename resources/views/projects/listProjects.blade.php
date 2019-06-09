@extends('navbar.navbar')
@section('content')
@section('titulo','Projects')

<?php 
    $card_deck = '</div><div class="card-deck">';
    function edit_button($id) {
        return '<a href='.route("projects.edit", $id).' role="button" class="btn btn-success">Edit</a>';
    } 
?>

<div class="container">
    <h1 class="display-3 text-muted">Projects</h1>
    <div class="card-deck">
    @foreach ($projects as $key => $project)
            <!--Card-->
            <div class="card card-cascade">

                <!--Card image-->
                <div class="view view-cascade">
                    <img src="{{asset($project->photo)}}" class="card-img-top" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
            
                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <!--Title-->
                    <h4 class="card-title text-center"><strong>{{$project->title}}</strong></h4>
                    <h5 class="text-center">{{ strftime("%B %d, %Y",strtotime($project->created_at)) }}</h5>
                    <!--Facebook-->
                </div>
                <!--/.Card content-->
                <div class="card-footer text-center">
                    <a href="{{route('projects.show', $project->pk_project)}}" role="button" class="btn btn-secondary">View</a>
                    @if (Auth::check())
                        @if (session('role') == 0 || session('role') == 1)
                            {!! edit_button($project->pk_project) !!}
                        @endif
                    @endif
                </div>
            </div>
            <!--/.Card-->
        @if ($key % 3 == 2)
            {!! $card_deck !!}
        @endif
    @endforeach
</div>
@endsection