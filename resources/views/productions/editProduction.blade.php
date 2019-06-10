@extends('navbar.navbar')
@section('content')
@section('titulo','Update Product')

@foreach ($errors->all() as $error)
    {{$error}}
@endforeach

<div class="container">
    <form enctype="multipart/form-data" action="{{route('productions.update', $production->pk_production)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')

        <h5 class="modal-title text-muted mb-3" id="exampleModalLabel">Update Product</h5>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="title"><strong><small style="color : #616161">Title:</small></strong></label>
                            <input type="text" class="form-control @is_valid('title', $errors) @endis_valid" name="title" id="title" value="{{$production->title}}"  required>
                            <small class="invalid-feedback">@showError('title', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 mb-3">
                        <div class="form-group mb-2">
                            <label for="type"><strong><small style="color : #616161">Type:</small></strong></label>
                            <select name="type" id="type" class="form-control custom-select @is_valid('type', $errors) @endis_valid" required>
                                <option value="" disabled>Select</option>
                                <option value="Conference" @if ($production->type == "Conference") selected @endif >Conference</option>
                                <option value="Paper" @if ($production->type == "Paper") selected @endif >Paper</option>
                                <option value="Journal" @if ($production->type == "Journal") selected @endif >Journal</option>
                            </select>
                            <small class="invalid-feedback">@showError('type', $errors) @endshowError</small>
                        </div>
                    </div>
                    <div class="col-5 mb-3">
                        <div class="form-group mb-2">
                            <label for="photo"><strong><small style="color : #616161">Photo:</small></strong></label>
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
                                <input name="external" type="checkbox" id="external" value='true' @if ($production->external == 1) checked @endif>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mb-3">
                        <div class="form-group mb-2">
                            <label for="fk_project"><strong><small style="color : #616161">Project:</small></strong></label>
                            <select id="fk_project" name="fk_project" class="selectpicker form-control @is_valid('fk_project', $errors) @endis_valid" data-live-search="true" required>
                                <option value="" disabled>Select</option>
                                @foreach ($projects as $project)
                                    <option value="{{$project->pk_project}}" @if ($production->fk_project == $project->pk_project) selected @endif>{{$project->title}}</option>
                                @endforeach
                            </select>
                            <small class="invalid-feedback">@showError('project', $errors) @endshowError</small>
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
                                            <option value="{{$subline->pk_subline}}" @if ($production->sublines()->get()->contains('pk_subline', $subline->pk_subline)) selected @endif >{{$subline->name}}</option>
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
                                    <option value="{{$user->pk_usr}}" @if ($production->users()->get()->contains('pk_usr', $user->pk_usr)) selected @endif >{{explode(' ', $user->first_name)[0]}} {{explode(' ', $user->last_name)[0]}}</option>
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
                            <input type="text" class="form-control @is_valid('ext_author', $errors) @endis_valid" name="ext_author" id="ext_author" value="{{$production->ext_author}}">
                            <small class="invalid-feedback">@showError('ext_author', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label for="code"><strong><small style="color : #616161">Link to code:</small></strong></label>
                            <input type="text" class="form-control @is_valid('code', $errors) @endis_valid" name="code" id="code" value="{{$production->code}}"required>
                            <small class="invalid-feedback">@showError('code', $errors) @endshowError</small>
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
                                    <option value="{{$dataset->pk_dataset}}" @if ($production->datasets()->get()->contains('pk_dataset', $dataset->pk_dataset)) selected @endif >{{$dataset->name}}</option>
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
                            <textarea required rows="5" name="abstract" class="form-control @is_valid('abstract', $errors) @endis_valid" placeholder="Product description here">{{$production->abstract}}</textarea>
                            <small class="invalid-feedback">@showError('abstract', $errors) @endshowError</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-md btn-success float-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

