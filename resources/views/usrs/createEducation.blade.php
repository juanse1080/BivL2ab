@extends('navbar.navbar')
@section('content')
@section('titulo','Add Education')
<div class="container">
    <div class="timeline">
        <form action="{{route('storeEducation', $usr->pk_usr)}}" method="POST" id="form">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add education</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="fk_usr" value="{{$usr->pk_usr}}">
                <div id="containerh" class="container" style="background:#fff !important;">
                    <div class="row">
                        <div class="col-6 col-sm-6 mb-3">
                            <div class="form-group mb-2">
                                <label for="school"><strong><small style="color : #616161">School:</small></strong></label>
                                <div class="input-group mb-2">
                                    <input type="text" name="school" id="school" class="form-control" value="{{old('school')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 mb-3">
                            <div class="form-group mb-2">
                                <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                                <div class="input-group mb-2">
                                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 mb-3">
                            <div class="form-group mb-2">
                                <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                                <div class="input-group mb-2">
                                    <select name="type" id="type" required class="custom-select custom-select-lg">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Master">Master</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Postdoctor">Postdoctor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 mb-3">
                            <div class="form-group mb-2">
                                <label for="start"><strong><small style="color : #616161">From:</small></strong></label>
                                <div class="input-group mb-2">
                                    <input type="date" class="form-control" name="start" id="start" value="{{old('start')}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 mb-3">
                            <div class="form-group mb-2">
                                <label for="end"><strong><small style="color : #616161">To:</small></strong></label>
                                <div class="input-group mb-2">
                                    <input type="date" class="form-control" name="end" id="end" value="{{old('end')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
</div>
@endsection

