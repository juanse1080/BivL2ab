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
                    <div class="card">
                        <a style="max-width:30px;position:relative;top:15px;left:calc(100% - 45px);display:inline-block" class="text-muted rounded-circle text-center" href="#" role="button" id="dropdown{{$usr->pk_usr}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown{{$usr->pk_usr}}">
                            <a class="dropdown-item" href="{{route('account.show', $usr->pk_usr)}}">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            @if (Auth::check())
                                @if (session('role') == 0 || $usr->pk_usr == session('usr')['pk_usr'] )
                                    <a class="dropdown-item" href="{{route('account.edit', $usr->pk_usr)}}">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="{{route('account.destroy', $usr->pk_usr)}}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                @endif
                            @endif
                        </div>
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