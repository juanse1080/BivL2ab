{{-- <style>
    .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: cover;
    }

    .card-deck {
        margin-bottom: 15px;
    }
</style> --}}

<style>
    img.card-img {
        object-fit: cover;
    }
</style>
    
@extends('navbar.navbar')
@section('content')
@section('titulo','Productions')

<div class="container">
    @foreach ($productions as $key => $production)
        <div class="card card-shadown card-cascade mb-2">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <a href="{{route('productions.show', $production->pk_production)}}"><img src="{{asset($production->photo)}}" class="card-img" alt="{{$production->name}}" style="height: 50vh;max-height: 150px;"></a>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        @if(strlen($production->abstract) > 350)
                            <p align="justify" class="card-text">
                                {{substr($production->abstract,0,220)}}<span id="dots{{$production->pk_production}}">...</span><span id="more{{$production->pk_production}}" style="display: none">{{substr($production->abstract,220)}}</span><span class="ml-2 btn-link read-more" style="font-size: smaller" pk="{{$production->pk_production}}">[+]</button>
                            </p>
                        @else
                            <p align="justify" class="card-text">
                                {{$production->abstract}}
                            </p>
                        @endif
                        @if(session('role') !== null and !session('role'))
                            <div class="badge badge-pill badge-success" onclick="location.href='{{route('productions.edit', $production->pk_production)}}'">
                                <button type="submit" class="btn-link text-white" >
                                    Edit
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                            <form action="{{route('productions.destroy', $production->pk_production)}}" class="badge badge-pill badge-danger" method="POST">
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