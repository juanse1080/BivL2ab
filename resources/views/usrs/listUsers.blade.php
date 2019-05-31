<style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    
        .card-deck {
            margin-bottom: 15px;
        }
    </style>
    
    @extends('navbar.navbar')
    @section('content')
    @section('titulo','Users')
    
    <?php 
        $card_deck = '</div><div class="card-deck">';
        // function edit_button($id) {
        //     return '<a href='.route("usrs.edit", $id).' role="button" class="btn btn-success">Edit</a>';
        // } 
    ?>
    
    <div class="container">
            <h1 class="display-3 text-muted">Users</h1>
        <div class="card-deck">
        @foreach ($usrs as $key => $usr)
                <!--Card-->
                <div class="card card-cascade">
    
                    <!--Card image-->
                    <div class="view view-cascade">
                        <img src="{{$usr->photo}}" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                
                    <!--Card content-->
                    <div class="card-body card-body-cascade">
                        <!--Title-->
                        <h4 class="card-title text-center"><strong>{{$usr->first_name}} {{$usr->last_name}}</strong></h4>
                        <h5 class="text-center">{{ strftime("%B %d, %Y",strtotime($usr->birthdate)) }}</h5>
                        <!--Facebook-->
                    </div>
                    <!--/.Card content-->
                    <div class="card-footer text-center">
                        {{-- <a href="{{route('usrs.show', $usr->pk_usr)}}" role="button" class="btn btn-secondary">View</a> --}}
                        {{-- @if (Auth::check())
                            @if (session('role') == 0 || session('role') == 1)
                                {!! edit_button($usr->pk_usr) !!}
                            @endif
                        @endif --}}
                    </div>
                </div>
                <!--/.Card-->
            @if ($key % 3 == 2)
                {!! $card_deck !!}
            @endif
        @endforeach
    </div>
    @endsection