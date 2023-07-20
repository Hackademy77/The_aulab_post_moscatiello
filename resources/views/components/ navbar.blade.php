<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu" aria-LabeLLedby="navbarDropdown">
            <li><a cLass="dropdown-item" href="">Profilo</a></li>
             <li>hr class="dropdown-divider"></li> <li><a class="dropdown-item" href="#" onclick="event. preventDefault(); document. querySelector('#form-logout').submit();">Logout</a></li>
           <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none"≥
             @csrf
           </form>
        </u1>
        </li> 
@endauth
@guest
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Benvenuto Ospite</a>
    <ul class="dropdown-menu" aria-Labelledby="navbarDropdown"> <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
    <li><a class="dropdown-item" href="{froute('login')}}">Accedi</a></li> </ul> </li>
@endguest
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
         @if(Auth::user()->is__admin)
          <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
         @endif
         @if(Auth::user()->is_revisor)
         <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
         @endif
         @if(Auth::user()->is_writer) 
         <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard del redattore</a></li>
         @endif
         <form class="d-flex" method="GET" action="{{route('article.search')}}">
          <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-Label="Search">
          <button class="btn btn-outline-info" type="submit">Cerca</button>
        </form>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>