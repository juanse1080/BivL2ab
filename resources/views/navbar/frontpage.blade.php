<style>
  .co {
    background-color:#411c7d;
    color: #fff !important;
  }
  .co > a {
    color: #fff !important; 
  }
</style>
<header class="mb-5 card-shadown">
  <nav class="navbar navbar-expand-lg pt-0 pb-0" style="background: white;">
    <div class="container">
      <a href="{{route('root')}}" class="navbar-brand">
        <img class="img-fulid" src="{{asset('img/blank.svg')}}" width="100" height="70">
      </a>
      <button class="navbar-toggler text-muted" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='/') co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark" href="/">Home</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='news')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('news.index')}}">News</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='account')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('account.index')}}">People</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='projects')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('projects.index')}}">Projects</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='productions')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('productions.index')}}">Productions</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='datasets')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('datasets.index')}}">Datasets</a>
          </li>
          <li class="nav-item pl-2 pr-2 @if (Request::path()=='courses')) co @endif" style="border-radius:50rem!important;font-size:16px">
            <a class="nav-link text-dark " href="{{route('courses.index')}}">Courses</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>