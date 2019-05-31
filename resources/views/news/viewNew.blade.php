@if ($errors->has('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ $error->message }}</li>
        </ul>
    </div>
@endif

{{$new->pk_new}},
{{$new->title}},
{{$new->description}},
<img src="{{$new->photo}}" alt="{{$new->title}}">
