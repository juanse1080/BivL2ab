@extends('navbar.navbar')
@section('content')
@section('titulo','Edit new')
<div class="container">
    <h5 class="text-muted mb-3">Edit new:</h5>
    <div class="text-center mb-5">
        <img src="{{secure_asset($new->photo)}}" class="Responsive image" style="width:36%; height:250px;">
    </div>
    <form enctype="multipart/form-data" method="POST" action="{{ route('news.update', $new->pk_new) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$new->title}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
            <div class="col-6" style="cursor:pointer">
                <label for="photo">Photo:</label>
                <div class="input-group mb-3">
                    <div class="custom-file form-control form-control-sm">
                        <input type="file" class="custom-file-input" name="photo" id="photo">
                    </div>
                </div>
                <small class="invalid-feedback">{{$errors->photo}}</small>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea required rows="5" name="description" class="form-control" placeholder="Course description here..">{{$new->description}}</textarea>
                    <small class="invalid-feedback">{{$errors->description}}</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Create">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection

