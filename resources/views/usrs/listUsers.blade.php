@extends('navbar.navbar')
@section('content')
@section('titulo','Users')

<div class="container">
    @foreach ($order as $item => $education)
        <h5 class="text-muted mt-3">{{ucwords($education)}}:</h5>
        @foreach ($usrs[$education] as $key => $usr)
            @if (($key+1) % 2 != 0)
                <div class="row">
            @endif
                <div class="col-md-6 mt-3">
                    <div class="card card-shadown" onclick="location.href='{{route('account.show', $usr->pk_usr)}}'">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset($usr->photo)}}" class="card-img" alt="{{$usr->first_name}}" style="max-height: 200px; object-fit: cover;;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-title">{{$usr->first_name}} {{$usr->last_name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @if (($key+1) % 2 == 0 || ($key+1) == count($usrs[$education])) 
                </div>
            @endif
        @endforeach
    @endforeach
</div>
@endsection