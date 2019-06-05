@extends('navbar.navbar')
@section('content')
@section('titulo','Datasets')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach ($datasets as $key => $dataset)
                    <a class="list-group-item list-group-item-action @if ($key === 0)active @endif" id="list-{{$key}}-list" data-toggle="list" href="#list-{{$key}}" role="tab" aria-controls="{{$key}}">{{$dataset->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($datasets as $key => $dataset)
                    <div class="tab-pane fade @if ($key === 0)show active @endif" id="list-{{$key}}" role="tabpanel" aria-labelledby="list-{{$key}}-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{$dataset->photo}}" class="Responsive image" alt="..." style="width:36%; height:250px;">
                                </div>
                                <hr>
                                <div class="container">
                                    <p class="text-break font-weight-light">{{$dataset->description}}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{$dataset->url}}" target="_blank" class="btn btn-md btn-primary float-right"><span class="glyphicon glyphicon-cloud-download"></span> <i class="fas fa-download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <ul>
    @foreach ($datasets as $dataset)
        <li>Name: {{$dataset->name}} , description: {{$dataset->description}}, url: {{$dataset->url}}, photo: <img src="{{$dataset->photo}}" alt="{{$dataset->name}}">, dataset path: {{$dataset->photo}}</li>
    @endforeach
</ul> --}}