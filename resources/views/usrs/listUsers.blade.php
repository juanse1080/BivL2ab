@extends('navbar.navbar')
@section('content')
@section('titulo','Users')

<div class="container">
    @foreach ($usrs as $key => $usr)
        @if (($key+1) % 2 != 0)
            <div class="row">
        @endif
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset($usr->photo)}}" class="card-img" alt="{{$usr->first_name}}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <span class="card-title">{{$usr->first_name}} {{$usr->last_name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @if (($key+1) % 2 == 0)
            </div>
        @endif
    @endforeach
</div>
@endsection