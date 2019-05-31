@extends('navbar.navbar')
@section('content')
@section('titulo','Create user')
<div class="container">
    <h5 class="text-muted mb-3">Create User:</h5>
    <form enctype="multipart/form-data" action="/account" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="title">First name:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="title">Last name:</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    <label for="title">Role:</label>
                    <select class="form-control custom-select" name="role" id="role" required>
                        <option value="" disabled selected>Select the role</option>
                        <option @select('role', '0') @endselect value="0">Admin</option>
                        <option @select('role', '1') @endselect value="1">News</option>
                        <option @select('role', '2') @endselect value="2">Student</option>
                    </select>
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
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Birthdate:</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{old('birthdate')}}" required>
                    <small class="invalid-feedback">{{$errors->title}}</small>
                </div>
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

