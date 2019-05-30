<ul>
    @foreach ($courses as $course)
        <li>Name: {{$course->name}} , description: {{$course->description}}, url: {{$course->url}}</li>
    @endforeach
</ul>