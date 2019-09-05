@extends('navbar.navbar')
@section('content')
@section('titulo','Create course')
{{-- 
@foreach ($errors->all() as $error)
    {{$error}}
@endforeach --}}

<div class="container">
    <h5 class="text-muted mb-3">Create Course:</h5>
    <form enctype="multipart/form-data" action="/courses" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control @is_valid('name', $errors)@endis_valid" name="name" id="name" value="{{old('name')}}" required>
                    <small class="invalid-feedback">@showError('name', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="url">Link to course:</label>
                    <input type="text" class="form-control @is_valid('url', $errors)@endis_valid" name="url" id="url" value="{{old('url')}}" required>
                    <small class="invalid-feedback">@showError('url', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-4" style="cursor:pointer">
                <label for="photo">Photo:</label>
                <div class="input-group mb-3">
                    <div class="custom-file form-control @is_valid('photo', $errors)@endis_valid form-control-sm">
                        <input type="file" class="custom-file-input" name="photo" id="photo" required>
                    </div>
                </div>
                <small class="invalid-feedback">@showError('photo', $errors) @endshowError</small>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="time">Duration:</label>
                    <input type="number" class="form-control @is_valid('time', $errors)@endis_valid" value="{{old('time')}}" id="time" name="time" required>
                    <small class="invalid-feedback">@showError('time', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="type">Type of course:</label>
                    <select class="form-control @is_valid('type', $errors)@endis_valid custom-select" name="type" id="type" required>
                        <option @select('type', 'Attending') @endselect value="Attending">Attending</option>
                        <option @select('type', 'Distance') @endselect value="Distance">Distance</option>
                    </select>
                    <small class="invalid-feedback">@showError('type', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea required rows="5" name="description" class="form-control @is_valid('description', $errors)@endis_valid" placeholder="Course description here..">{{old('description')}}</textarea>
                    <small class="invalid-feedback">@showError('description', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" name="action" class="btn btn-md btn-success float-right" value="Create">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection