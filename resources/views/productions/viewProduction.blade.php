@extends('navbar.navbar')
@section('content')
@section('titulo','View production')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
</style>
<div class="container">
    <h5 class="modal-title text-muted mb-3 text-center" id="exampleModalLabel">Production: {{$production->title}}</h5>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card mb-2 card-shadown">
                <img src="{{asset($production->photo)}}" class="card-img-top" alt="{{$production->title}}">
            </div>
            {{-- <span class="mb-2 mt-2 text-muted">Abstract: </span>
            <div class="card card-shadown">
                <div class="card-body">{{$production->abstract}}</div>
            </div> --}}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion card-shadown" id="accordionE">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Title:</span>
                            {{ucwords($production->title)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Project:</span>
                            <a href="{{route('projects.show', $production->project->pk_project)}}" style="cursor:pointer">{{$production->project->title}}</a>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Type:</span>
                            {{ucwords($production->type)}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Users:</span>
                            @foreach($production->users()->get() as $key => $usr)
                                <a href="{{route('account.show', $usr->pk_usr)}}" class="badge badge-pill {{$pill[$key%7]}}" style="cursor:pointer">{{$usr->shortName()}}</a>
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>
                            <span class="mr-2">Sublines:</span>
                            @foreach($production->sublines()->get() as $key => $subline)
                                <span class="badge badge-pill badge-light">{{$subline->name}}</span>
                            @endforeach
                        </span>
                    </div>
                </div>
                @if (Auth::check())
                    @if (session('usr')['role'] == '0' || $production->users()->get()->contains('pk_usr', session('usr')['pk_usr']))
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <span class="mr-2">Actions:</span>
                                    <a href="{{route('downloadPDF', $production->pk_production)}}" class="badge badge-pill badge-success text-white"  style="cursor:pointer">
                                        <i class="fas fa-file-pdf"></i>
                                        PDF
                                    </a>
                                    <a href="{{route('productions.edit', $production->pk_production)}}" class="badge badge-pill badge-primary">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="badge badge-pill badge-danger text-white"  style="cursor:pointer" onclick="$('#usr{{$production->pk_production}}').submit()">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                    <form action="{{route('productions.destroy', $production->pk_production)}}" id="usr{{$production->pk_production}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </span>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <span class="mb-3 mt-3 text-muted">Datasets: </span>
            @if ($production->datasets()->count() == 0)
                <div class="card card-shadown">
                    <div class="card-body">
                        Doesn't have datasets
                    </div>
                </div>
            @else
                <div id="owl-demo" class="owl-carousel d-none d-sm-none d-md-none d-lg-none d-xl-block" onclick="location.href='{{route('datasets.index')}}'">
                    @foreach($production->datasets as $dataset)
                        <a class="item">
                            <div class="card ml-3" >
                                <img class="lazyOwl card-botton" style="max-height:400px;object-fit:scale-down" data-src="{{asset($dataset->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$dataset->name}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div id="owl-demo2" class="owl-carousel d-block d-sm-block d-md-block d-lg-block d-xl-none" onclick="location.href='{{route('datasets.index')}}'">
                    @foreach($production->datasets as $dataset)
                        <a class="item">
                            <div class="card ml-3" >
                                <img class="lazyOwl card-botton" style="max-height:400px;object-fit:scale-down" data-src="{{asset($dataset->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$dataset->name}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 2,
                lazyLoad : true,
                navigation : true
            });
            $("#owl-demo2").owlCarousel({
                items : 1,
                lazyLoad : true,
                navigation : true,
                singleItem: true,
            }); 
        });
    </script>
</div>
@endsection
