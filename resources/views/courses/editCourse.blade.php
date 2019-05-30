@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('courses.update',$course->pk_course) }}"  role="form">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    
    <input type="text" name="name" id="name" class="form-control input-sm" value="{{$course->name}}">

    <textarea name="description">{{$course->description}}</textarea>

    <input type="text" name="url" id="url" class="form-control input-sm" value="{{$course->url}}">

    <input type="submit"  value="Actualizar" class="btn btn-success btn-block">

</form>