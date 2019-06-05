
<!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">

    <div class="wrapper" >
        <!-- Sidebar  -->
        <nav id="sidebar" class="active" >
            <div class="sidebar-header"  style="cursor: pointer;">
                <img src="" alt="">
                <h3 style="color: white;">Bivlab <i class="fas fa-flask"></i></h3>
                <strong style="color: Dodgerblue;" ><i class="fas fa-flask"></i></strong>
            </div>

            <ul class="list-unstyled components">
                {{--  HOME  --}}
				<li @if (Request::path()=="account/".session('user')['pk_usr']) class="active" @endif >
					<a class="nav-link " href="/"> <i class="fas fa-home"></i> Home</a>
                </li>
                {{--  NEWS  --}}
				<li @if (Request::path()=="news" or Request::path()=="/news/create") class="active" @endif >
                    <!-- <a class="nav-link " href="{{ url('courses') }}"> <i class="fas fa-user-graduate"></i> Estudiantes</a> -->
                    <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="far fa-newspaper"></i> News
					</a>
					<ul class="collapse list-unstyled" id="newsSubmenu">
                        <li>
							<a href="{{ url('/news') }}"><i class="fas fa-eye"></i> View</a>
						</li>
						<li>
							<a href="{{ url('/news/create') }}"><i class="fas fa-user-plus"></i> Create</a>
						</li>
					</ul>
                </li>
                {{--  USERS  --}}
				<li @if (Request::path()=="account" or Request::path()=="account/create") class="active" @endif >
					<a href="#accountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<i class="fas fa-users"></i> Users
					</a>
					<ul class="collapse list-unstyled" id="accountSubmenu">
                        <li>
							<a href="{{ url('/account') }}"><i class="fas fa-eye"></i> View</a>
						</li>
						<li>
							<a href="{{ url('/account/create') }}"><i class="fas fa-user-plus"></i> Create</a>
						</li>
					</ul>
                </li>
                

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-info d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link mr-3" href="{{ url('/home') }}">{{ucwords(session('usr')['first_name'])}} {{ucwords(session('usr')['last_name'])}} <img class="rounded-circle w-100 pl-2" style="max-width:50px" src="{{asset(session('usr')['photo'])}}"></a>
                            </li>
							<li class="nav-item active">
								<a class="nav-link" href="{{ url('/logout') }}"> <i class="fas fa-sign-out-alt"></i> Log out </a>
							</li>
                        </ul>
                    </div>
                </div>
            </nav>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
		});
		$('.noti').popover().click(function () {
            setTimeout(function () {
                $('.noti').popover('hide');
            }, 5000);
        });
    </script>
    <script type="text/javascript" >
        $(document).ready(function(){
            $("#notificationLink").click(function(){
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });
            //Document Click hiding the popup
            $(document).click(function(){
                $("#notificationContainer").hide();
            });
        });
    </script>
