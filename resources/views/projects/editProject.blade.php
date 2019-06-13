@extends('navbar.navbar')
@section('content')
@section('titulo','Create Project')
<div class="container">
    
    <form enctype="multipart/form-data" action="{{route('projects.update', $project->pk_project)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <h5 class="modal-title mb-3" id="exampleModalLabel">Edit Project</h5>
        <div class="row justify-content-md-center">
            <div class="col-12 text-center">
                <img src="{{asset($project->photo)}}" style="max-height:400px;object-fit:scale-down" class="thumbnail">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 mb-3">
                <div class="form-group mb-2">
                    <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                    <input type="text" class="form-control @is_valid('title', $errors) @endis_valid" name="title" id="title" value="{{$project->title}}"  required>
                    <small class="invalid-feedback">@showError('title', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 mb-3">
                <div class="form-group mb-2">
                    <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                    <select name="type" id="type" class="form-control selectpicker @is_valid('type', $errors) @endis_valid" data-live-search="true" required>
                        <option value="Undergraduate" @if ($project->type == "Undergraduate") selected @endif >Undergraduate</option>
                        <option value="Master" @if ($project->type == "Master") selected @endif >Master</option>
                        <option value="Doctor" @if ($project->type == "Doctor") selected @endif >Doctor</option>
                        <option value="Postdoctor @if ($project->type == "Postdoctor") selected @endif ">Postdoctor</option>
                    </select>
                    <small class="invalid-feedback">@showError('type', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-12 col-sm-6 mb-3">
                <div class="form-group mb-2">
                    <label for="type"><strong><small style="color : #616161">Photo:</small></strong></label>
                    <div class="custom-file form-control form-control-sm @is_valid('photo', $errors) @endis_valid">
                        <input type="file" class="custom-file-input" name="photo" id="photo">
                    </div>
                    <small class="invalid-feedback">@showError('photo', $errors) @endshowError</small>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-2">
                    <label for="usrs"><strong><small style="color : #616161">Users:</small></strong></label>
                    <select id="usrs" name="usrs[]" class="selectpicker form-control @is_valid('usrs', $errors) @endis_valid" multiple data-live-search="true" required>
                        @foreach ($users as $user)
                            <option value="{{$user->pk_usr}}" @if ($project->users()->get()->contains('pk_usr', $user->pk_usr)) selected @endif>{{explode(' ', $user->first_name)[0]}} {{explode(' ', $user->last_name)[0]}}</option>
                        @endforeach
                    </select>
                    <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-2">
                    <label for="sublines"><strong><small style="color : #616161">Sublines:</small></strong></label>
                    <select id="sublines" name="sublines[]" class="selectpicker form-control @is_valid('sublines', $errors) @endis_valid" multiple data-live-search="true" required>
                        @foreach ($lines as $line)
                            <optgroup label="{{$line->name}}">
                                @foreach ($line->sublines()->get() as $subline)
                                    <option value="{{$subline->pk_subline}}" @if ($project->sublines()->get()->contains('pk_subline', $subline->pk_subline)) selected @endif>{{$subline->name}}</option>
                                @endforeach
                                </optgroup>
                        @endforeach
                    </select>
                    <small class="invalid-feedback">@showError('sublines', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 mb-3">
                <div class="form-group mb-2">
                    <label for="summary"><strong><small style="color : #616161">Summary:</small></strong></label>
                    <textarea required rows="5" name="summary" class="form-control @is_valid('summary', $errors) @endis_valid" placeholder="Project description here">{{$project->summary}}</textarea>
                    <small class="invalid-feedback">@showError('summary', $errors) @endshowError</small>
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

