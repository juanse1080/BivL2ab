@if ($errors->has('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ $error->message }}</li>
        </ul>
    </div>
@endif

{{$dataset->pk_dataset}},
{{$dataset->name}},
{{$dataset->description}},
<a href="{{$dataset->url}}">URL</a>

<img src="{{$dataset->photo}}" alt="{{$dataset->pk_dataset}}">
