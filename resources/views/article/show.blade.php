<x-layout>
     
        <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h1 class="display-1 font-titolo">{{__('ui.detailOf')}} {{$article->title}}</h1>
              </div>
          </div>
      </div>
        <div class = "card-wrapper-detail">
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
                      <img src = "{{$image->getUrl(400,300)}}" alt = "shoe image">
                    </a>
                  </div>
                  @php
                  $counter++;
                  @endphp
                @endforeach
              </div>
            </div>
              @else
              
            @endif
            <!-- card right -->
            <div class = "product-content">
              <h2 class = "product-title">{{__('ui.title')}}: {{$article->title}}</h2>
              
    
    
              <div class = "product-price">
                
                <p class = "new-price">{{__('ui.price')}}: {{$article->price}} €</p>
              </div>
    
              <div class = "product-detail">
               
                <p>{{__('ui.description')}}: {{$article->body}}</p>
                
                <a href="{{route('categoryShow' , ['category' => $article->category])}}" class="btn btn-success">{{__('ui.category')}}: {{$article->category->name}}</a>
    
                <p >{{__('ui.publish')}} {{$article->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article->user->name ?? ''}}</p>
              
              </div>
    
              <div class = "purchase-info">
                <input type = "number" min = "0" value = "1">
                <button type = "button" class = "btn">
                  Add to Cart <i class = "fas fa-shopping-cart"></i>
                </button>
                
              </div>
    
              <div class = "social-links">
                <p>Share At: </p>
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
                <a href = "#">
                  <i class = "fab fa-pinterest"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
    
       



</x-layout>