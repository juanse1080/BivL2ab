@extends('navbar.navbar')
@section('content')
@section('titulo','Create Project')
<div class="container">

    
    <form enctype="multipart/form-data" action="{{route('projects.update', $project->pk_project)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
            <div class="container">
                <img src="{{asset($project->photo)}}"  class="thumbnail">
            </div>
        </div>
        <div class="modal-body">
            <div id="containerh" class="container" style="background:#fff !important;">
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                            <div class="input-group mb-2">
                                <select name="type" id="type" required class="form-control custom-select">
                                    <option value="" disabled >Select</option>
                                    <option value="Undergraduate" @if ($project->type == "Undergraduate") selected @endif >Undergraduate</option>
                                    <option value="Master" @if ($project->type == "Master") selected @endif >Master</option>
                                    <option value="Doctor" @if ($project->type == "Doctor") selected @endif >Doctor</option>
                                    <option value="Postdoctor @if ($project->type == "Postdoctor") selected @endif ">Postdoctor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Photo:</small></strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group mb-3">
                                    <div class="custom-file form-control form-control-sm">
                                        <input type="file" class="custom-file-input" name="photo" id="photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="user"><strong><small style="color : #616161">Users:</small></strong></label>
                            <div class="input-group mb-2" id="addUsers">
                                <select name="user[0]" id="user[0]" required class="form-control custom-select ml-2">
                                    <option value="" disabled>Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->pk_usr}}" @if ($usersInProject[0]->pk_usr === $user->pk_usr) selected @endif >{{$user->first_name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                                <select name="user[1]" id="user[1]" required class="form-control custom-select ml-2">
                                    <option value="" disabled >Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->pk_usr}}" @if ($usersInProject[1]->pk_usr === $user->pk_usr) selected @endif ">{{$user->first_name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                                <select name="user[2]" id="user[2]" required class="form-control custom-select ml-2">
                                    <option value="" disabled >Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->pk_usr}}" @if ($usersInProject[2]->pk_usr === $user->pk_usr) selected @endif ">{{$user->first_name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="summary"><strong><small style="color : #616161">Summary:</small></strong></label>
                            <div class="input-group mb-2">
                                <textarea required rows="5" name="summary" class="form-control" placeholder="Project description here">{{$project->summary}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-md btn-success float-right">Edit</button>
            </div>
        </div>
    </form>
</div>

@endsection

