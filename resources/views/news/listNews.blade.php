@foreach ($news as $new)
{{$new->title}}, {{$new->description}}, <img src="{{$new->photo}}" alt="{{$new->title}}">
@endforeach