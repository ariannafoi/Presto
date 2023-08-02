<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid p-0">
      <a class="navbar-brand n-custom " href="{{route('welcome')}}"><img src="/img/logopresto.png" alt="" class="navbar-logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars i-custom"></i>
      </button>
      <div class="collapse navbar-collapse font-scritte dropdown__menu" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.welcome')}} {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
               <li>
                @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                      <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-succes btn-sm position-relative" aria-current="page">
                        {{__('ui.revisorZone')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Article::toBeRevisonedCount()}}
                            <span class="visually-hidden">Messaggio non letto</span>
                        </span>
                      </a>
                    </li>
                @endif  
              </li>

              <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a></li>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                  @csrf
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('login')}}">{{__('ui.access')}}</a>

          </li>
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('register')}}">{{__('ui.register')}}</a>

          </li>
          @endauth
          <li class="nav-item dropdown">
            <a id="categoriesDropdown" class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.language')}}
            </a>
            <ul class="dropdown-menu dropdown-menu-lang" aria-labelledby="categoriesDropdown">
                <li><x-_locale lang="it"/></li>
                <li><x-_locale lang="en"/></li>
                <li><x-_locale lang="es"/></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="categoriesDropdown" class="nav-link dropdown-toggle n-custom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.categories')}}
            </a>
            <ul class="dropdown-menu dropdown-menu-lang" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link n-custom" aria-current="page" href="{{route('article.index')}}">{{__('ui.announcements')}}</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link n-custom" href="{{route('create')}}">{{__('ui.createAnnouncement')}}</a>
          </li>

          
          
        </ul>
        
      </div>
    </div>
  </nav>

