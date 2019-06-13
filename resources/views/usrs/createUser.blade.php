@extends('navbar.navbar')
@section('content')
@section('titulo','Create user')
<div class="container">
    <h5 class="text-muted mb-3">Create Userjeje :</h5>
    <form enctype="multipart/form-data" action="/account" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" class="form-control @is_valid('email', $errors) @endis_valid" placeholder="example@email.com" value="@eachError('email', $errors) @endeachError">
                    <small class="invalid-feedback">@showError('email', $errors) @endshowError</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control custom-select @is_valid('role', $errors) @endis_valid" name="role" id="role" required>
                        <option value="" disabled selected>Select the role</option>
                        <option @select('role', '0') @endselect value="0">Admin</option>
                        <option @select('role', '1') @endselect value="1">News</option>
                        <option @select('role', '2') @endselect value="2">Student</option>
                    </select>
                    <small class="invalid-feedback">@showError('role', $errors) @endshowError</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <button type="submit" name="action" class="btn btn-sm btn-success float-right" value="Create">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

