<x-layout>
    
    {{-- <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.detailOf')}} {{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row ">
            <div class="col-12 col-md-8 mx-auto  carousel-custom">
                <div id="carouselExampleFade" class="carousel slide carousel-fade ">
                  @if (count($article->images))  
                  <div class="carousel-inner justify-content-center">
                    @foreach ($article->images as $image)
                      <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{Storage::url($image->path)}}" class="img-custom" alt="...">
                      </div>
                    @endforeach  
                  </div>
                  @else
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/201" class="  img-custom"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/202" class=" img-custom"  alt="...">
                      </div>
                    </div>
                  @endif

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-12 col-md-4 justify-content-center d-flex align-items-center flex-column mt-3 ">
              <h5 class="card-title">{{__('ui.title')}}: {{$article->title}}</h5>
              <p class="card-text">{{__('ui.description')}}: {{$article->body}}</p>
              <p class="card-text">{{__('ui.price')}}: {{$article->price}} €</p>
              <a href="{{route('categoryShow' , ['category' => $article->category])}}" class="btn btn-success">{{__('ui.category')}}: {{$article->category->name}}</a>
              <p class="card-footer">{{__('ui.publish')}} {{$article->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article->user->name ?? ''}}</p>
          </div>
        </div>
    </div> --}}

   
      
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
                @foreach ($article->images as $image)
                <div class = "img-showcase" @if($loop->first)active @endif">
                  <img src="{{Storage::url($image->path)}}" class="" alt="...">
                </div>
                @endforeach 
              </div>
              <div class = "img-select">
                <div class = "img-item">
                  <a href = "#" data-id = "1">
                    <img src = "shoe_1.jpg" alt = "shoe image">
                  </a>
                </div>
                <div class = "img-item">
                  <a href = "#" data-id = "2">
                    <img src = "shoe_2.jpg" alt = "shoe image">
                  </a>
                </div>
                <div class = "img-item">
                  <a href = "#" data-id = "3">
                    <img src = "shoe_3.jpg" alt = "shoe image">
                  </a>
                </div>
                <div class = "img-item">
                  <a href = "#" data-id = "4">
                    <img src = "shoe_4.jpg" alt = "shoe image">
                  </a>
                </div>
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