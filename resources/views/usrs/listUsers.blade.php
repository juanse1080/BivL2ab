@extends('navbar.navbar')
@section('content')
@section('titulo','Users')

<div class="container">
    @foreach ($usrs as $education => $item)
        <h5 class="text-muted mt-3">{{ucwords($education)}}:</h5>
        @foreach ($item as $key => $usr)
            @if (($key+1) % 2 != 0)
                <div class="row">
            @endif
                <div class="col-md-6 mt-3">
                    <div class="card" onclick="location.href='{{route('account.show', $usr->pk_usr)}}'">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset($usr->photo)}}" class="card-img" alt="{{$usr->first_name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-title">{{$usr->first_name}} {{$usr->last_name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @if (($key+1) % 2 == 0 || ($key+1) == count($item))
                </div>
            @endif
        @endforeach
    @endforeach
</div>
@endsection