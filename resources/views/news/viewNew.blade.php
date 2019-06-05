@extends('navbar.navbar')
@section('content')
@section('titulo','View new')
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <h3 class="text-muted mb-3 text-center" style="font-size: 2rem;">{{$new->title}}</h3>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-10">
            <img src="{{asset($new->photo)}}" class="rounded w-100" alt="{{$new->title}}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <p ALIGN="justify">{{$new->description}}</p>
        </div>
    </div>
</div>
@endsection


