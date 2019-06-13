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
@section('titulo','Courses')


<?php 
    $card_deck = '</div><div class="card-deck">';
    function edit_button($id) {
        return '<a href='.route("courses.edit", $id).' role="button" class="btn btn-success">Edit</a>';
    } 
?>

<div class="container">
    <div class="card-deck">
        @foreach ($courses as $key => $course)
            <!--Card-->
            <div class="card card-shadown card-cascade mb-2" style="cursor:pointer" onclick="location.href='{{$course->url}}'">

                <!--Card image-->
                <div class="view view-cascade">
                    <img src="{{asset($course->photo)}}" class="card-img-top" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
            
                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <!--Title-->
                    <h4 class="card-title text-center"><strong>{{$course->name}}</strong></h4>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
            @if ($key % 2 == 1)
                {!! $card_deck !!}
            @endif
        @endforeach
    </div>
    <div class="d-flex">
        <div class="mx-auto">
            {{$courses->links()}}
        </div>
    </div>
</div>
@endsection