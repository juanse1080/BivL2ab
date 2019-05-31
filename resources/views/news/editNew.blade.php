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

<form enctype="multipart/form-data" method="POST" action="{{ route('news.update', $new->pk_new) }}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    {{-- @method('PUT') --}}

    <label for="title"><strong><small style="color : #616161">Name</small></strong></label>
    <input type="text" class="form-control form-control-sm" name="title" id="title" value="{{$new->title}}">

    <label for="description"><strong><small style="color : #616161">Description</small></strong></label>
    <textarea name="description" placeholder="Course description here..">{{$new->description}}</textarea>

    <img src="{{$new->photo}}" alt="{{$new->title}}">
    <input type="file" name="photo" class="custom-file-input form-group" id="customFileLang" lang="en">
    <label id="photo" class="custom-file-label" for="customFileLang">Upload a photo</label>
    
    <input type="submit" name="action" value="Update" class=" btn btn-info btn-block rounded-0 py-2 " style="background-color: #17a2b8 !important; border-color: #17a2b8 !important;">

</form>