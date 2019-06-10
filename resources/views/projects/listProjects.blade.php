<style>
    .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: cover;
    }

    .card-deck {
        margin-bottom: 15px;
    }
</style>

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
    <div class="card-deck">
        @foreach ($projects as $key => $project)
            <!--Card-->
            <div class="card card-cascade mb-2">

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
                    @foreach ($project->users()->get() as $key2 => $user)
                        <h5 style="display: inline-block;"><span class="badge badge-pill {{$pill[$key2%7]}}">{{explode(' ',$user->first_name)[0]}} {{explode(' ', $user->last_name)[0]}}</span></h5>
                    @endforeach
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
            @if ($key % 2 == 1)
                {!! $card_deck !!}
            @endif
        @endforeach
    </div>
</div>
@endsection