@extends('navbar.navbar')
@section('content')
@section('titulo','Create Product')
<div class="container">
    <form enctype="multipart/form-data" action="/productions" method="POST">
        {{ csrf_field() }}
        <h5 class="modal-title text-muted mb-3" id="exampleModalLabel">Create Product</h5>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                            <input type="text" class="form-control @is_valid('title', $errors) @endis_valid" name="title" id="title" value="{{old('title')}}"  required>
                            <small class="invalid-feedback">@showError('title', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                            <select name="type" id="type" class="form-control custom-select @is_valid('type', $errors) @endis_valid" value="{{old('type')}}" required>
                                <option value="" disabled selected>Select</option>
                                <option value="Conference">Conference</option>
                                <option value="Paper">Paper</option>
                                <option value="Journal">Journal</option>
                            </select>
                            <small class="invalid-feedback">@showError('type', $errors) @endshowError</small>
                        </div>
                    </div>
                    <div class="col-5 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Photo:</small></strong></label>
                            <div class="custom-file form-control form-control-sm @is_valid('photo', $errors) @endis_valid">
                                <input type="file" class="custom-file-input" name="photo" id="photo" required>
                            </div>
                            <small class="invalid-feedback">@showError('photo', $errors) @endshowError</small>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="form-group mb-2">
                            <label for="external"><strong><small style="color : #616161">External production:</small></strong></label>
                            <div class="@is_valid('photo', $errors) @endis_valid">
                                <input name="external" type="checkbox" id="external">
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="sublines"><strong><small style="color : #616161">Sublines:</small></strong></label>
                            <select id="sublines" name="sublines[]" class="selectpicker form-control @is_valid('sublines', $errors) @endis_valid" multiple data-live-search="true" required>
                                @foreach ($lines as $line)
                                    <optgroup label="{{$line->name}}">
                                        @foreach ($line->sublines()->get() as $subline)
                                            <option value="{{$subline->pk_subline}}">{{$subline->name}}</option>
                                        @endforeach
                                        </optgroup>
                                @endforeach
                            </select>
                            <small class="invalid-feedback">@showError('sublines', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="usrs"><strong><small style="color : #616161">Users:</small></strong></label>
                            <select id="usrs" name="usrs[]" class="selectpicker form-control @is_valid('usrs', $errors) @endis_valid" multiple data-live-search="true" required>
                                @foreach ($users as $user)
                                    <option value="{{$user->pk_usr}}">{{explode(' ', $user->first_name)[0]}} {{explode(' ', $user->last_name)[0]}}</option>
                                @endforeach
                            </select>
                            <small class="invalid-feedback">@showError('usrs', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="ext_author"><strong><small style="color : #616161">External authors. Add them separated by commas (ej: Author 1, Author 2):</small></strong></label>
                            <input type="text" class="form-control @is_valid('ext_author', $errors) @endis_valid" name="ext_author" id="ext_author" value="{{old('ext_author')}}">
                            <small class="invalid-feedback">@showError('ext_author', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                            <input type="text" class="form-control @is_valid('title', $errors) @endis_valid" name="title" id="title" value="{{old('title')}}"  required>
                            <small class="invalid-feedback">@showError('title', $errors) @endshowError</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">PDF:</small></strong></label>
                            <div class="custom-file form-control form-control-sm @is_valid('pdf', $errors) @endis_valid">
                                <input type="file" class="custom-file-input" name="pdf" id="pdf" required>
                            </div>
                            <small class="invalid-feedback">@showError('pdf', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label for="datasets"><strong><small style="color : #616161">Datasets:</small></strong></label>
                            <select id="datasets" name="datasets[]" class="selectpicker form-control @is_valid('datasets', $errors) @endis_valid" multiple data-live-search="true">
                                @foreach ($datasets as $dataset)
                                    <option value="{{$dataset->pk_dataset}}">{{$dataset->name}}</option>
                                @endforeach
                            </select>
                            <small class="invalid-feedback">@showError('datasets', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="abstract"><strong><small style="color : #616161">Abstract:</small></strong></label>
                            <textarea required rows="5" name="abstract" class="form-control @is_valid('abstract', $errors) @endis_valid" placeholder="Product description here">{{old('abstract')}}</textarea>
                            <small class="invalid-feedback">@showError('abstract', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-md btn-success float-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

