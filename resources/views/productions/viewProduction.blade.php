@extends('navbar.navbar')
@section('content')
@section('titulo','View production')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card mb-2">
                <img src="{{asset($production->photo)}}" class="card-img-top" alt="{{$production->name}}">
            </div>
            <span class="mb-2 mt-2 text-muted">Abstract: </span>
            <div class="card">
                <div class="card-body">{{$production->abstract}}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion" id="accordionE">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Title:</span>
                            {{ucwords($production->title)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Type:</span>
                            {{ucwords($production->type)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Users:</span>
                            @foreach($production->users()->get() as $key => $usr)
                                <a href="{{route('account.show', $usr->pk_usr)}}" class="badge badge-pill {{$pill[$key%7]}}" style="cursor:pointer">{{$usr->shortName()}}</a>
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Sublines:</span>
                            @foreach($production->sublines()->get() as $key => $subline)
                                <span class="badge badge-pill badge-light">{{$subline->name}}</span>
                            @endforeach
                        </span>
                    </div>
                </div>
                @if (Auth::check())
                    @if (session('usr')['role'] == '0' || $production->users()->get()->contains('pk_usr', session('usr')['pk_usr']))
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <span class="mr-2">Actions:</span>
                                    <a href="{{route('productions.edit', $production->pk_production)}}" class="badge badge-pill badge-primary">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="badge badge-pill badge-danger text-white"  style="cursor:pointer" onclick="$('#usr{{$production->pk_production}}').submit()">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                    <form action="{{route('productions.destroy', $production->pk_production)}}" id="usr{{$production->pk_production}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </span>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <span class="mb-2 mt-2 text-muted">Productions: </span>
            {{-- <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach ($production->productions as $production)
                        <li class="list-group-item">
                            <a href="{{route('productions.show', $production->pk_production)}}">
                                {{$production->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div> --}}
        </div>
    </div>
</div>
@endsection
