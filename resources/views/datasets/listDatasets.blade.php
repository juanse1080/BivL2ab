<ul>
    @foreach ($datasets as $dataset)
        <li>Name: {{$dataset->name}} , description: {{$dataset->description}}, url: {{$dataset->url}}, photo: <img src="{{$dataset->photo}}" alt="{{$dataset->name}}">, dataset path: {{$dataset->photo}}</li>
    @endforeach
</ul>