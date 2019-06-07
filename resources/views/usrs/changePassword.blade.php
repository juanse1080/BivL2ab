@extends('navbar.navbar')
@section('content')
@section('titulo','Change password')
<div class="container">
    <form enctype="multipart/form-data" action="./updatePassword" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="oldpassword">Current Password:</label>
                    <input id="oldpassword" name="oldpassword" type="password" class="form-control">
                    <small class="invalid-feedback">@showError('password', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">New Password:</label>
                    <input id="password" name="password" type="password" class="form-control">
                    <small class="invalid-feedback">@showError('password', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="retypepassword">Retype Password:</label>
                    <input id="retypepassword" name="retypepassword" type="retypepassword" class="form-control">
                    <small class="invalid-feedback">@showError('retypepassword', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Update">Update password</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

