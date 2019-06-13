@extends('navbar.navbar')
@section('content')
@section('titulo','Create dataset')
<div class="container">
    <h5 class="text-muted mb-3">Create Dataset:</h5>
    <form enctype="multipart/form-data" action="/datasets" method="POST">
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
                    <label for="url">Link to download:</label>
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



{{-- <h1>Create course</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form enctype="multipart/form-data" action="/datasets" method = "POST">
    @csrf
    <label for="name"><strong><small style="color : #616161">Name</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{old('name')}}">

    <label for="description"><strong><small style="color : #616161">Description</small></strong></label>
    <textarea name="description" placeholder="Course description here..">{{old('description')}}</textarea>

    <input type="file" name="photo" class="custom-file-input form-group" id="customFileLang" lang="en">
    <label id="file" class="custom-file-label" for="customFileLang">Upload a photo</label>

    <label for="url"><strong><small style="color : #616161">URL</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="url" id="url" value="{{old('url')}}">
    
    <input type="submit" name="action" value="Create" class=" btn btn-info btn-block rounded-0 py-2 " style="background-color: #17a2b8 !important; border-color: #17a2b8 !important;">

</form> --}}