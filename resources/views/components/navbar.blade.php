<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid">
      <a class="navbar-brand n-custom" href="{{route('welcome')}}"><i class="fa-regular fa-paper-plane px-2 "></i>Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-burger"></i>
      </button>
      <div class="collapse navbar-collapse font-scritte" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link n-custom" aria-current="page" href="{{route('welcome')}}">Home <i class="fa-solid fa-house"></i></a>
          </li>
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
          @guest
          <li class="nav-item d-flex justify-items-center">
            <a class="nav-link n-custom" href="{{route('login')}}">Accedi <i class="fa-solid fa-fingerprint"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('register')}}">Registrati <i class="fa-solid fa-id-card"></i></a>
            
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('create')}}">Crea il tuo annuncio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a></li>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                  @csrf
                </form>
            </ul>
          </li>
          @endguest
          
        </ul>
        
      </div>
    </div>
  </nav>