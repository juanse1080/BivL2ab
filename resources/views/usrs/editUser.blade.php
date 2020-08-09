@extends('navbar.navbar')
@section('content')
@section('titulo','Edit user')
<div class="container">
    <h5 class="text-muted mb-3">Edit User:</h5>
    <div class="text-center mb-5">
        <img src="{{secure_asset($usr->photo)}}" class="img-thumbnail" style="width:24%; height:250px;">
    </div>
    <form enctype="multipart/form-data" method="POST" action="{{route('account.update', $usr->pk_usr)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first_name">First name:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{$usr->first_name}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Last name:</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{$usr->last_name}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="biography">Biography:</label>
                    <textarea class="form-control" id="biography" name="biography" rows="6">{{$usr->biography}}</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Birthdate:</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{$usr->birthdate}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
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
            <div class="col-6">
                <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Create">Edit</button>
            </div>
        </div>
    </form>
</div>
@endsection

