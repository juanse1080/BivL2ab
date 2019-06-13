@extends('navbar.navbar')
@section('content')
@section('titulo','Datasets')

<?php 
    function edit_button ($id) {
        return '<a href='.route("datasets.edit", $id).' role="button" class="btn btn-md btn-success float-right ml-1">Edit</a> ';
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group card-shadown" id="list-tab" role="tablist">
                @foreach ($datasets as $key => $dataset)
                    <a class="list-group-item list-group-item-action @if ($key === 0)active @endif" id="list-{{$key}}-list" data-toggle="list" href="#list-{{$key}}" role="tab" aria-controls="{{$key}}">{{$dataset->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($datasets as $key => $dataset)
                    <div class="tab-pane fade @if ($key === 0)show active @endif" id="list-{{$key}}" role="tabpanel" aria-labelledby="list-{{$key}}-list">
                        <div class="card card-shadown">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset($dataset->photo)}}" class="Responsive image" alt="..." style="width:36%; height:250px;">
                                </div>
                                <hr>
                                <div class="container">
                                    <p class="text-break font-weight-light">{!! nl2br(e($dataset->description)) !!}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{$dataset->url}}" target="_blank" class="btn btn-md btn-primary float-right ml-1"><span class="glyphicon glyphicon-cloud-download"></span> <i class="fas fa-download"></i> Download</a>
                                @if (Auth::check())
                                    @if (session('role') == 0)
                                        {!! edit_button($dataset->pk_dataset) !!} 
                                        <form method="POST" action="{{route("datasets.destroy", $dataset->pk_dataset)}}">
                                            {{ csrf_field() }}
                                            {{ method_field("DELETE") }}
                                                <input type="submit" class="btn btn-danger delete-user float-right ml-1" value="Delete">
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection