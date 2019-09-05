<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .card-deck {
        margin-bottom: 15px;
    }
</style>

@extends('navbar.navbar')
@section('content')
@section('titulo','BivL2ab News')

@php
    $card_deck = '</div><div class="card-deck">';
@php

<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <h5 class="text-muted mb-3">News:</h5>
        </div>
    </div>
    <div class="card-deck">
    @foreach ($news as $key => $new)
            <!--Card-->
            <div class="card card-shadown card-cascade" onclick="location.href='{{route('news.show', $new->pk_new)}}'">

                <!--Card image-->
                <div class="view view-cascade">
                    <img src="{{asset($new->photo)}}" class="card-img-top" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
            
                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <!--Title-->
                    <p class="mb-3 text-center"><strong>{{$new->title}}</strong></p>
                    {{-- <h5 class="text-center">{{ strftime("%B %d, %Y",strtotime($new->created_at)) }}</h5> --}}
                    <!--Facebook-->
                </div>
                <!--/.Card content-->
                <div class="card-footer">
                    <div class="float-right text-muted">
                        {{ strftime("%B %d, %Y",strtotime($new->created_at)) }}
                    </div>
                </div>
            </div>
            <!--/.Card-->
        @if ($key % 3 == 2)
            {!! $card_deck !!}
        @endif
    @endforeach
</div>
@endsection