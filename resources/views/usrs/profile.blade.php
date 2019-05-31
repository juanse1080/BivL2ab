@extends('navbar.navbar')
@section('content')
@section('titulo','Profile')
<style>
    .card-header{
        padding: .5rem 0.7rem;
        background-color: #fff;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card">
                <img src="https://scontent.fbga3-1.fna.fbcdn.net/v/t1.0-9/51043306_2306385492707738_7350515233485488128_n.jpg?_nc_cat=107&_nc_ht=scontent.fbga3-1.fna&oh=fdbcfe08b486be8b5bd16a85445a9e14&oe=5D8C7C3D" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Basic information:
                        </span>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                                    <span class="ml-5">{{$usr->birthdate}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                    <div class="card-header" id="headingThree">
                        <span data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Education:
                            
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
