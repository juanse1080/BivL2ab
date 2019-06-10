@extends('navbar.navbar')
@section('content')
@section('titulo','View project')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
</style>
<div class="container">
    <h5 class="modal-title text-muted mb-3 text-center" id="exampleModalLabel">Project: {{$project->title}}</h5>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card mb-2">
                <img src="{{asset($project->photo)}}" class="card-img-top" alt="{{$project->title}}">
            </div>
            <span class="mb-2 mt-2 text-muted">Summary: </span>
            <div class="card">
                <div class="card-body">{{$project->summary}}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion" id="accordionE">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Title:</span>
                            {{ucwords($project->title)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Type:</span>
                            {{ucwords($project->type)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Users:</span>
                            @foreach($project->users()->get() as $key => $usr)
                                <a href="{{route('account.show', $usr->pk_usr)}}" class="badge badge-pill {{$pill[$key%7]}}" style="cursor:pointer">{{$usr->shortName()}}</a>
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Sublines:</span>
                            @foreach($project->sublines()->get() as $key => $subline)
                                <span class="badge badge-pill badge-light">{{$subline->name}}</span>
                            @endforeach
                        </span>
                    </div>
                </div>
                @if (Auth::check())
                    @if (session('usr')['role'] == '0' || $project->users()->get()->contains('pk_usr', session('usr')['pk_usr']))
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <span class="mr-2">Actions:</span>
                                    <a href="{{route('projects.edit', $project->pk_project)}}" class="badge badge-pill badge-primary">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="badge badge-pill badge-danger text-white"  style="cursor:pointer" onclick="$('#usr{{$project->pk_project}}').submit()">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                    <form action="{{route('projects.destroy', $project->pk_project)}}" id="usr{{$project->pk_project}}" method="POST">
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
            <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach ($project->productions as $production)
                        <li class="list-group-item">
                            <a href="{{route('productions.show', $production->pk_production)}}">
                                {{$production->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
