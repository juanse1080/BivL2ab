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
        <div class="col-10 text-center">
            <img src="{{asset($new->photo)}}" style="width:36%; height:250px;" class="rounded" alt="{{$new->title}}">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <p ALIGN="justify">{!! nl2br(e($new->description)) !!}</p>
            <a class="badge badge-pill badge-danger text-white" onclick="$('#{{$new->pk_new}}').submit()">
                <i class="fas fa-trash"></i>
                Delete
            </a>
            <form action="{{route('news.destroy', $new->pk_new)}}" id="{{$new->pk_new}}" method="POST">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>
@endsection


