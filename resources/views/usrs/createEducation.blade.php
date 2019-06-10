@extends('navbar.navbar')
@section('content')
@section('titulo','Add Education')
<div class="container">
    <div class="timeline">
        <form action="{{route('storeEducation', $usr->pk_usr)}}" method="POST" id="form">
            {{ csrf_field() }}
            <h5 class="modal-title text-muted mb-3" id="exampleModalLabel">Add education</h5>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="form-group mb-2">
                        <label for="school"><strong><small style="color : #616161">School:</small></strong></label>
                        <input type="text" name="school" id="school" class="form-control" value="{{old('school')}}">
                        <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="form-group mb-2">
                        <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="form-group mb-2">
                        <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                        <select name="type" id="type" required class="selectpicker form-control">
                            <option value="" disabled selected>Select</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Master">Master</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Postdoctor">Postdoctor</option>
                        </select>
                        <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="form-group mb-2">
                        <label for="start"><strong><small style="color : #616161">From:</small></strong></label>
                        <input type="date" class="form-control" name="start" id="start" value="{{old('start')}}" required>
                        <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="form-group mb-2">
                        <label for="end"><strong><small style="color : #616161">To:</small></strong></label>
                        <input type="date" class="form-control" name="end" id="end" value="{{old('end')}}">
                        <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </form>
</div>
@endsection

