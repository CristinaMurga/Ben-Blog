<nav class="navbar navbar-expand-lg  navbarGeneral">
    <div class="container-fluid">
      <a class="navbar-brand navbarGeneralItem text-white" href="{{route('home')}}">BV</a>
      <button class="navbar-toggler border-0 navbarGeneralItem text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      <div class="collapse navbar-collapse navbarGeneralItem text-white" id="navbarNav">
        <ul class="navbar-nav">
          @foreach($nav as $navLink => $navItem)
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ $navLink }}">{{ $navItem }}</a>
          </li>
          @endforeach
        </ul>
        @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbaritemborderWhite">
            <li class="nav-item dropdown navbarGeneralItem ">
              <a class="nav-link dropdown-toggle navbaritemborder text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end bg-color4 navbaritemborderWhite">
                <li><a class="dropdown-item " href="{{ route('articles.index') }}">I tuoi articoli</a></li>
                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Gestici categorie</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.users') }}">Gestici utenti</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn white">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">
            <a class="nav-link navbaritemborder text-white" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbaritemborder text-white" href="/register">Registrati</a>
          </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>