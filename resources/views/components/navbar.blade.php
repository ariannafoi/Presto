<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid">
      <a class="navbar-brand n-custom" href="{{route('welcome')}}"><i class="fa-regular fa-paper-plane px-2 "></i>Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars i-custom"></i>
      </button>
      <div class="collapse navbar-collapse font-scritte" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto pe-4">
          <li class="nav-item"> 
            <a class="nav-link n-custom" aria-current="page" href="{{route('welcome')}}"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
               <li>
                @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                      <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-succes btn-sm position-relative" aria-current="page">
                        Zona revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Article::toBeRevisonedCount()}}
                            <span class="visually-hidden">Messaggio non letto</span>
                        </span>
                      </a>
                    </li>
                @endif  
              </li>
              {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>  --}}
              <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a></li>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                  @csrf
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item d-flex justify-items-center">
            <a class="nav-link n-custom" href="{{route('login')}}">Accedi</a>
            {{-- <i class="fa-solid fa-fingerprint"></i> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('register')}}">Registrati</a>
            {{-- <i class="fa-solid fa-id-card"></i>--}}
          </li>
          @endauth
          <li class="nav-item dropdown">
            <a id="categoriesDropdown" class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                <li><hr class="dropdown-divider"></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link n-custom" aria-current="page" href="{{route('article.index')}}">Annunci</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('create')}}">Crea il tuo annuncio</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>