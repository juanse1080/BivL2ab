@extends('navbar.navbar')
@section('content')
@section('titulo','Profile')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    #owl-demo2 .item{
        margin: 3px;
    }
    #owl-demo2 .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card mb-2">
                <img src="{{$usr->photo}}" class="card-img-top" alt="{{$usr->first_name}}">
            </div>
            <span class="mb-2 mt-2 text-muted">Biography: </span>
            <div class="card">
                <div class="card-body">{{$usr->biography}}</div>
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion" id="accordionE">
                <div class="card">
                    <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                                <small class="text-muted">Birthday:</small>
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
                                    <span class="text-muted">Birthday:</span>
                                    <span class="ml-5">{{$usr->birthdateString()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                    <div class="card-header" id="headingThree"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span>
                            <span class="mr-2">Education:</span>
                            @foreach($usr->group('education') as $key => $education)
                                <span class="badge badge-pill {{$pill[$key%7]}}">{{$education}}</span>
                            @endforeach
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
            </div>
            <span class="mb-2 mt-2 text-muted">Productions: </span>
            <div id="owl-demo" class="owl-carousel d-none d-sm-none d-md-none d-lg-none d-xl-block">
                @foreach($usr->productions as $production)
                    <a class="item" href="">
                        <div class="card ml-3" >
                            <img class="lazyOwl card-botton" data-src="{{$production->photo}}" alt="Lazy Owl Image">
                            <div class="card-body">
                                {{$production->title}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div id="owl-demo2" class="owl-carousel d-block d-sm-block d-md-block d-lg-block d-xl-none">
                @foreach($usr->productions as $production)
                    <a class="item" href="">
                        <div class="card ml-3" >
                            <img class="lazyOwl card-botton" data-src="{{$production->photo}}" alt="Lazy Owl Image">
                            <div class="card-body">
                                {{$production->title}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
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
