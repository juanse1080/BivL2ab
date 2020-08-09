@extends('navbar.navbar')
@section('content')
@section('titulo','Edit dataset')
<div class="container">
    <h5 class="text-muted mb-3">Edit Dataset:</h5>
    <div class="text-center mb-5">
        <img src="{{secure_asset($dataset->photo)}}" class="Responsive image" style="width:36%; height:250px;">
    </div>
    <form enctype="multipart/form-data" method="POST" action="{{ route('datasets.update',$dataset->pk_dataset) }}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$dataset->name}}" required>
                    <small class="invalid-feedback">{{$errors->name}}</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="url">Link to download:</label>
                    <input type="text" class="form-control" name="url" id="url" value="{{$dataset->url}}" required>
                    <small class="invalid-feedback">{{$errors->url}}</small>
                </div>
            </div>
            <div class="col-4" style="cursor:pointer">
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
                    <textarea required rows="15" name="description" class="form-control" placeholder="Course description here..">{{$dataset->description}}</textarea>
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