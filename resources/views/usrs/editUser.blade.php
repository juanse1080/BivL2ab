@extends('navbar.navbar')
@section('content')
@section('titulo','Create user')
<div class="container">
    <h5 class="text-muted mb-3">Create User:</h5>
    {{-- {{ route('usrs.update', $usr->pk_usr) }} --}}
    <form enctype="multipart/form-data" method="POST" action="/">
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
        {{-- <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="passwPassword="password" id="password" value="{{old('password')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" class="form-control" placeholder="example@email.com">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="biography">Biography:</label>
                    <textarea class="form-control" id="biography" name="biography" rows="6"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="title">Birthdate:</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{old('birthdate')}}" required>
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
                <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Create">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

