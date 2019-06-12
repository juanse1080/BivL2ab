@extends('navbar.navbar')
@section('content')
@section('titulo','Profile')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
    .owl-demo .item{
        margin: 3px;
    }
    .owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card card-shadown mb-2">
                <img src="{{asset($usr->photo)}}" class="card-img-top" alt="{{$usr->first_name}}">
            </div>
            <span class="mb-2 mt-2 text-muted">Biography: </span>
            <div class="card card-shadown">
                <div class="card-body">{{$usr->biography}}</div>
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion card-shadown" id="accordionE">
                <div class="card">
                    <div class="card-header" style="cursor:pointer" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span>
                            Basic information:
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionE">
                        <div class="card-body" style="padding: 0.5rem 0.8rem;">
                            <div class="d-block d-md-block d-lg-none">
                                <small class="text-muted">First name:</small>
                                <div style="padding: 0.3rem 0.8rem;">{{$usr->first_name}}</div>
                                <small class="text-muted">Last name:</small>
                                <div style="padding: 0.3rem 0.8rem;">{{$usr->last_name}}</div>
                                <small class="text-muted">Birthdate:</small>
                                <div style="padding: 0.3rem 0.8rem;">{{$usr->birthdate}}</div>
                            </div>
                            <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block p-2">
                                <div class="mb-2">
                                    <span class="text-muted">First name:</span>
                                    <span class="ml-4">{{$usr->first_name}}</span>
                                </div>
                                <div class="mb-2">
                                    <span class="text-muted">Last name:</span>
                                    <span class="ml-4">{{$usr->last_name}}</span>
                                </div>
                                <div class="">
                                    <span class="text-muted">Birthdate:</span>
                                    <span class="ml-5">{{$usr->birthdateString()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="cursor:pointer" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span>
                            Contact information: 
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body" style="padding: 0.5rem 0.8rem;">
                            <div class="d-block d-md-block d-lg-none">
                                <small class="text-muted">Email:</small>
                                <div style="padding: 0.3rem 0.8rem;">{{$usr->email}}</div>
                            </div>
                            <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block p-2">
                                <div class="mb-2">
                                    <span class="text-muted">Email:</span>
                                    <span class="ml-4">{{$usr->email}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="cursor:pointer" id="headingThree"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span>
                            <span class="mr-2">Education:</span>
                            @if (empty($usr->group('education')))
                                Doesn't have education
                            @else
                                @foreach($usr->group('education') as $key => $education)
                                    <span class="badge badge-pill {{$pill[$key%7]}}">{{$education}}</span>
                                @endforeach
                            @endif
                            
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="list-group list-group-flush">
                            @foreach($usr->education as $education)
                                <li class="list-group-item">
                                    <span class="text-muted">{{$education->title}}:</span>
                                    <span class="ml-4">Universidad Industrial de Santander</span>
                                    <span class="ml-4">{{ucwords($education->type)}}</span>
                                    <div class="text-muted float-right">
                                        <span class="badge badge-pill badge-secondary">{{$education->dateString('start')}}</span>
                                        <span class="badge badge-pill badge-secondary">{{$education->dateString('end')}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if (Auth::check())
                    @if (session('usr')['role'] == '0' || session('usr')['pk_usr'] == $usr->pk_usr)
                        <div class="card">
                            <div class="card-header" style="cursor:pointer">
                                <span>
                                    <span class="mr-2">Actions:</span>
                                    @if (session('usr')['pk_usr'] == $usr->pk_usr)
                                        <a class="badge badge-pill badge-danger text-white" href="{{route('changePassword')}}">
                                            <i class="fas fa-key"></i>
                                            Change Password
                                        </a>
                                    @endif
                                    <a href="{{route('account.edit', $usr->pk_usr)}}" class="badge badge-pill badge-primary">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="badge badge-pill badge-success text-white" href="{{route('createEducation', $usr->pk_usr)}}">
                                        <i class="fas fa-plus"></i>
                                        Add education
                                    </a>
                                    @if (session('usr')['role'] == '0')
                                        <a class="badge badge-pill badge-danger text-white" onclick="$('#usr{{$usr->pk_usr}}').submit()">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </a>
                                        <form action="{{route('account.destroy', $usr->pk_usr)}}" id="usr{{$usr->pk_usr}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif
                                </span>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <span class="mt-3 mb-3 text-muted">Projects: </span>
            @if ($usr->projects()->count() == 0)
                <div class="card card-shadown">
                    <div class="card-body">
                        Doesn't have projects
                    </div>
                </div>
            @else
                <div id="owl-demo" class="owl-demo owl-carousel d-none d-sm-none d-md-none d-lg-none d-xl-block">
                    @foreach($usr->projects as $project)
                        <a class="item">
                            <div class="card card-shadown ml-3" onclick="location.href='{{route('projects.show', $project->pk_project)}}'">
                                <img class="lazyOwl card-botton" data-src="{{asset($project->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$project->title}}
                                </div>
                            </div>
                        </a>
                    @endforeach 
                </div>
                <div id="owl-demo2" class="owl-demo owl-carousel d-block d-sm-block d-md-block d-lg-block d-xl-none">
                    @foreach($usr->projects as $project)
                        <a class="item">
                            <div class="card card-shadown ml-3" onclick="location.href='{{route('projects.show', $project->pk_project)}}'">
                                <img class="lazyOwl card-botton" data-src="{{asset($project->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$project->title}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
            <span class="mb-3 mt-3 text-muted">Productions: </span>
            @if ($usr->productions()->count() == 0)
                <div class="card card-shadown">
                    <div class="card-body">
                        Doesn't have productions
                    </div>
                </div>
            @else
                <div id="owl-demo3" class="owl-demo owl-carousel d-none d-sm-none d-md-none d-lg-none d-xl-block">
                    @foreach($usr->productions as $production)
                        <a class="item">
                            <div class="card card-shadown ml-3" onclick="location.href='{{route('productions.show', $production->pk_production)}}'">
                                <img class="lazyOwl card-botton" data-src="{{asset($production->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$production->title}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div id="owl-demo4" class="owl-demo owl-carousel d-block d-sm-block d-md-block d-lg-block d-xl-none">
                    @foreach($usr->productions as $production)
                        <a class="item">
                            <div class="card card-shadown ml-3" onclick="location.href='{{route('productions.show', $production->pk_production)}}'">
                                <img class="lazyOwl card-botton" data-src="{{asset($production->photo)}}" alt="Lazy Owl Image">
                                <div class="card-body">
                                    {{$production->title}}
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
            $("#owl-demo3").owlCarousel({
                items : 2,
                lazyLoad : true,
                navigation : true
            });
            $("#owl-demo4").owlCarousel({
                items : 1,
                lazyLoad : true,
                navigation : true,
                singleItem: true,
            }); 
        });
    </script>
</div>
@endsection
