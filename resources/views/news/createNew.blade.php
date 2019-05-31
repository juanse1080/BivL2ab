@extends('navbar.navbar')
@section('content')
@section('titulo','Create new')
<div class="container">
    <h5 class="text-muted mb-3">Create new:</h5>
    <form enctype="multipart/form-data" action="/news" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('name')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
            <div class="col-6" style="cursor:pointer">
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
                <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Create">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

