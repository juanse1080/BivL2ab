<style>
    .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: cover;
    }

    .card-deck {
        margin-bottom: 15px;
    }
</style>
    
@extends('navbar.navbar')
@section('content')
@section('titulo','Courses')

<div class="container">
    @foreach ($courses as $key => $course)
        <div class="card card-shadown card-cascade mb-2">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{secure_asset($course->photo)}}" class="card-img" alt="{{$course->name}}" style="height: 100vh;max-height: 200px;object-fit: cover;height: auto;">
                    <div class="card-img-overlay" style="left: -15px;top: -15px;">
                        <span class="badge badge-pill badge-light">
                            <i class="fas fa-clock"></i>
                            {{ $course->time }} hours
                        </span>
                    </div>
                    <div class="card-img-overlay" style="left: calc(100% - 53px); top: -15px;">
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row justify-content-between mr-1 ml-1">
                            <h5 class="card-title">
                                <a href="{{$course->url}}" class="btn-link">{{$course->name}}</a>
                            </h5>
                            <div class="text-muted">
                                {{$course->type}} course
                            </div>
                        </div>
                        @if(strlen($course->description) > 295)
                            <p align="justify" class="card-text">
                                {{substr($course->description,0,220)}}<span id="dots{{$course->pk_course}}">...</span><span id="more{{$course->pk_course}}" style="display: none">{{substr($course->description,220)}}</span><span class="ml-2 btn-link read-more" style="font-size: smaller" pk="{{$course->pk_course}}">[+]</button>
                            </p>
                        @else
                            <p align="justify" class="card-text">
                                {{$course->description}}
                            </p>
                        @endif
                        @if(session('role') !== null and !session('role'))
                            <div class="badge badge-pill badge-success" onclick="location.href='{{route('courses.edit', $course->pk_course)}}'">
                                <button type="submit" class="btn-link text-white" >
                                    Edit
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                            <form action="{{route('courses.destroy', $course->pk_course)}}" class="badge badge-pill badge-danger" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn-link text-white">
                                    Delete
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script>
    $('.read-more').click(function(){
        id = $(this).attr('pk');
        var dots = $("#dots"+id);
        var moreText = $("#more"+id);
        var btnText = $(this);

        if (dots.css('display') == "none") {
            dots.css('display', 'inline');
            btnText.html("[+]"); 
            moreText.css('display', 'none');
        } else {
            dots.css('display', 'none');
            btnText.html("[-]"); 
            moreText.css('display', 'inline');
        }
    })
</script>
@endsection