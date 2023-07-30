<nav class="navbar navbar-expand-lg  border-bottom  shadow-sm p-1 mb-5 navbarcolor" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand navbarcolor" href="{{route('home')}}">{{env('APP_NAME')}}</a>
      <button class="navbar-toggler navbarcolor" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbarcolor" id="navbarNav">
        <ul class="navbar-nav">
          @foreach($nav as $navLink => $navItem)
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ $navLink }}">{{ $navItem }}</a>
          </li>
          @endforeach
        </ul>
        @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown navbarcolor">
              <a class="nav-link dropdown-toggle navbarcolor" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end navbarcolor">
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
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>