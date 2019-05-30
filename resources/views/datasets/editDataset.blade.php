<h1>Create course</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('datasets.update',$dataset->pk_dataset) }}"  role="form">
    @csrf
    <input name="_method" type="hidden" value="PATCH">

    <label for="name"><strong><small style="color : #616161">Name</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{$dataset->name}}">

    <label for="description"><strong><small style="color : #616161">Description</small></strong></label>
    <textarea name="description" placeholder="Course description here..">{{$dataset->description}}</textarea>

    <img src="{{$dataset->photo}}" alt="{{$dataset->name}}">
    <input type="file" name="photo" class="custom-file-input form-group" id="customFileLang" lang="en">
    <label id="photo" class="custom-file-label" for="customFileLang">Upload a photo</label>

    <label for="url"><strong><small style="color : #616161">URL</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="url" id="url" value="{{$dataset->url}}">
    
    <input type="submit" name="action" value="Update" class=" btn btn-info btn-block rounded-0 py-2 " style="background-color: #17a2b8 !important; border-color: #17a2b8 !important;">

</form>