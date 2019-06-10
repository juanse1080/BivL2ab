@extends('navbar.navbar')
@section('content')
@section('titulo','Create Project')
{{-- @foreach (old('usrs') as $usrs_) 
    {{$usrs_}}
@endforeach --}}
<div class="container">
    <form enctype="multipart/form-data" action="/projects" method="POST">
        {{ csrf_field() }}
        <h5 class="modal-title text-muted mb-3" id="exampleModalLabel">Create Project</h5>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                            <input type="text" class="form-control @is_valid('title', $errors) @endis_valid" name="title" id="title" value="{{old('title')}}"  required>
                            <small class="invalid-feedback">@showError('title', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                            <select name="type" id="type" class="form-control custom-select @is_valid('type', $errors) @endis_valid" value="{{old('type')}}" required>
                                <option value="" disabled selected>Select</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Master">Master</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Postdoctor">Postdoctor</option>
                            </select>
                            <small class="invalid-feedback">@showError('type', $errors) @endshowError</small>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Photo:</small></strong></label>
                            <div class="custom-file form-control form-control-sm @is_valid('photo', $errors) @endis_valid">
                                <input type="file" class="custom-file-input" name="photo" id="photo" required>
                            </div>
                            <small class="invalid-feedback">@showError('photo', $errors) @endshowError</small>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="summary"><strong><small style="color : #616161">Summary:</small></strong></label>
                            <textarea required rows="5" name="summary" class="form-control @is_valid('summary', $errors) @endis_valid" placeholder="Project description here">{{old('summary')}}</textarea>
                            <small class="invalid-feedback">@showError('summary', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label for="usrs"><strong><small style="color : #616161">Users:</small></strong></label>
                            <select id="usrs" name="usrs[]" class="selectpicker form-control @is_valid('usrs', $errors) @endis_valid" multiple data-live-search="true" required>
                                @foreach ($users as $user)
                                    <option value="{{$user->pk_usr}}">{{explode(' ', $user->first_name)[0]}} {{explode(' ', $user->last_name)[0]}}</option>
                                @endforeach
                            </select>
                            <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-md btn-success float-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

