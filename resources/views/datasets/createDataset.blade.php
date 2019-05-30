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

<form enctype="multipart/form-data" action="/datasets" method = "POST">
    @csrf
    <label for="name"><strong><small style="color : #616161">Name</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{old('name')}}">

    <label for="description"><strong><small style="color : #616161">Description</small></strong></label>
    <textarea name="description" placeholder="Course description here..">{{old('description')}}</textarea>

    <input type="file" name="photo" class="custom-file-input form-group" id="customFileLang" lang="en">
    <label id="file" class="custom-file-label" for="customFileLang">Upload a photo</label>

    <label for="url"><strong><small style="color : #616161">URL</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="url" id="url" value="{{old('url')}}">
    
    <input type="submit" name="action" value="Create" class=" btn btn-info btn-block rounded-0 py-2 " style="background-color: #17a2b8 !important; border-color: #17a2b8 !important;">

</form>