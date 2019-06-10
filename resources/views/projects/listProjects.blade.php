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
            <div class="card card-cascade mb-2" style="cursor:pointer" onclick="location.href='{{route('projects.show', $project->pk_project)}}'">

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
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
            @if ($key % 3 == 2)
                {!! $card_deck !!}
            @endif
        @endforeach
    </div>
    <div class="d-flex">
        <div class="mx-auto">
            {{$projects->links()}}
        </div>
    </div>
    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav> --}}
</div>
@endsection