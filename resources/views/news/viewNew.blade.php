@extends('navbar.navbar')
@section('content')
@section('titulo','View new')
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <h5 class="text-muted mb-3 text-center">{{$new->title}}</h5>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <img src="{{asset($new->photo)}}" style="max-height:400px;object-fit:scale-down" class="rounded" alt="{{$new->title}}">
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <p ALIGN="justify">{!! nl2br(e($new->description)) !!}</p>
            <div class="float-right">
                <a href="{{route('news.edit', $new->pk_new)}}" class="badge badge-pill badge-primary">
                    <i class="fas fa-edit"></i>
                    Edit
                </a>
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
</div>
@endsection


