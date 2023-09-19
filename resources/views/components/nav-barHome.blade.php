<nav class="navbar navbar-expand-lg p-1 mb-5 bg-transparent navbarhome ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">BV</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @foreach($nav as $navLink => $navItem)
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ $navLink }}">{{ $navItem }}</a>
          </li>
          @endforeach
        </ul>
        @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0>
            <li class="nav-item dropdown bg-trasparent ">
              <a class="nav-link dropdown-toggle navbaritemborder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end bg-color4 navbaritemborder">
                <li class="white"><a class="dropdown-item" href="{{ route('articles.index') }}">I tuoi articoli</a></li>
                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Gestici categorie</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.users') }}">Gestici utenti</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">
            <a class="nav-link navbaritemborder" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbaritemborder" href="/register">Registrati</a>
          </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>