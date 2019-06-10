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
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" required>
                    <small class="invalid-feedback">{{$errors->name}}</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="url">Link to course:</label>
                    <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}" required>
                    <small class="invalid-feedback">{{$errors->url}}</small>
                </div>
            </div>
            <div class="col-4" style="cursor:pointer">
                <label for="photo">Photo:</label>
                <div class="input-group mb-3">
                    <div class="custom-file form-control form-control-sm">
                        <input type="file" class="custom-file-input" name="photo" id="photo" required>
                    </div>
                </div>
                <small class="invalid-feedback">{{$errors->photo}}</small>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea required rows="5" name="description" class="form-control" placeholder="Course description here..">{{old('description')}}</textarea>
                    <small class="invalid-feedback">{{$errors->description}}</small>
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