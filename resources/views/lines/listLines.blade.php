@foreach ($lines as $line)
    {{$line->name}}, {{$line->description}}
@endforeach