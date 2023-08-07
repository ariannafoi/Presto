<x-layout>
     
        <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h1 class="display-1 font-titolo">{{__('ui.detailOf')}} {{$article->title}}</h1>
              </div>
          </div>
      </div>
        <div class = "card-wrapper-detail mt-4">
          <div class = "card">
            <!-- card left -->
            <div class = "product-imgs">
              @if (count($article->images))  
              <div class = "img-display">
                <div class = "img-showcase">
                  @foreach ($article->images as $image)
                    <img src="{{$image->getUrl(400,300)}}" class="" alt="...">
                    
                  @endforeach
                </div>
              </div>
              <div class = "img-select">
                @php
                    $counter = 1;
                @endphp
                
                @foreach ($article->images as $image)
                  <div class = "img-item">
                    <a href = "#" data-id = "{{$counter}}">
                      <img src = "{{$image->getUrl(400,300)}}">
                    </a>
                  </div>
                  @php
                    $counter++;
                  @endphp
                @endforeach
              </div>
              @else
                        <div class="img-display py-4">
                            <div class="img-showcase">
                                <img src="/img/imgDefault.png" class="" alt="...">
                                <img src="/img/imgDefault.png">
                                <img src="/img/imgDefault.png">
                                <img src="/img/imgDefault.png">
                            </div>
                        </div>
                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="/img/imgDefault.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="/img/imgDefault.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="/img/imgDefault.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="/img/imgDefault.png" alt="shoe image">
                                </a>
                            </div>
                        </div>
                    @endif
            </div>

            <!-- card right -->
            <div class = "product-content">
              <h2 class = "product-title">{{__('ui.title')}}: {{$article->title}}</h2>
          
              <div class = "product-price">
                <p class = "new-price">{{__('ui.price')}}: {{$article->price}} €</p>
              </div>
    
              <div class = "product-detail">
                <p>{{__('ui.description')}}: {{$article->body}}</p>
                <p>
                  {{__('ui.category')}}: <a href="{{route('categoryShow', ['category' => $article->category])}}" class="a-color">{{$article->category->name}}</a>
                </p>

                <p >{{__('ui.publish')}} {{$article->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article->user->name ?? ''}}</p>
              </div>

              <div>
                @if(Auth::user()->name == $article->user->name)
                  <form action="" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina Articolo</button>
                  </form>
                @endif
              </div>
    
              <div class = "social-links ">
                <p class="pt-3">Share At: </p>
                <a href = "#">
                  <i class = "fab fa-facebook-f"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-twitter"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-instagram"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-whatsapp"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
    
       



</x-layout>