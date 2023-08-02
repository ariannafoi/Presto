<x-layout>
{{-- <div class="container-fluid">
    <div class="row justify-content-center h">
        <div class="col-12 ">
            <h1 class="display-1">{{$article_to_check ? 'Ecco l\'annuncio da revisionare ': 'Non ci sono annunci da revisionare'}}</h1>
            <p class="lead subtitle-custom"></p>
        </div>
    </div>
</div>
@if ($article_to_check)
<div class="container ">
  <div class="row ">
      <div class="col-12 col-md-8 mx-auto  carousel-custom">
          <div id="carouselExampleFade" class="carousel slide carousel-fade ">
            @if (count($article_to_check->images))  
              <div class="carousel-inner justify-content-center">
                @foreach ($article_to_check->images as $image)
                  <div class="carousel-item @if($loop->first)active @endif">
                    <img src="{{$article->images()->first()->getUrl(400,300)}}" class="img-custom" alt="...">
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
     </div>
   </div>
  </div>
      <div class="">
          <h5 class="card-title">{{__('ui.title')}}: {{$article_to_check->title}}</h5>
          <p class="card-text">{{__('ui.description')}}: {{$article_to_check->body}}</p>
          <p class="card-text">{{__('ui.publish')}} {{$article_to_check->created_at->format('d/m/Y')}}</p>
        </div>
        </div>

        <div class="container">
          <div class="row">
                  <div class="col-12 col-md-6 ">
                      <form action="{{route('revisor.accept_article',['article'=>$article_to_check])}}"method='POST'>
                      @csrf
                      @method('PATCH')
                      <button type="submit"class="btn btn-success shadow">{{__('ui.accept')}}</button>
                      </form>
                  </div>
                  <div class="col-12 col-md-6 ">
                      <form action="{{route('revisor.reject_article',['article'=>$article_to_check])}}"method='POST'>
                      @csrf
                      @method('PATCH')
                      <button type="submit"class="btn btn-danger shadow">{{__('ui.refuse')}}</button>
                      </form>
                  </div>  
              </div>
          </div>
        </div>
        @endif --}}


        <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h1 class="display-1 font-titolo">{{$article_to_check ? 'Ecco l\'annuncio da revisionare ': 'Non ci sono annunci da revisionare'}}</h1>
              </div>
          </div>
      </div>
      @if ($article_to_check)
        <div class = "card-wrapper-detail">
          <div class = "card">
            <!-- card left -->
            <div class = "product-imgs">
              @if (count($article_to_check->images))  
              <div class = "img-display">
                <div class = "img-showcase">
                  @foreach ($article_to_check->images as $image)
                    <img src="{{$image->getUrl(400,300)}}" class="" alt="...">
                  @endforeach 
                </div>
              </div>
              <div class = "img-select">
                @php
                    $counter = 1;
                @endphp
                
                @foreach ($article_to_check->images as $image)
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
              <h2 class = "product-title">{{__('ui.title')}}: {{$article_to_check->title}}</h2>
              
    
    
              <div class = "product-price">
                
                <p class = "new-price">{{__('ui.price')}}: {{$article_to_check->price}} €</p>
              </div>
    
              <div class = "product-detail">
               
                <p>{{__('ui.description')}}: {{$article_to_check->body}}</p>
                
                <a href="{{route('categoryShow' , ['category' => $article_to_check->category])}}" class="btn btn-success">{{__('ui.category')}}: {{$article_to_check->category->name}}</a>
    
                <p >{{__('ui.publish')}} {{$article_to_check->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article_to_check->user->name ?? ''}}</p>
              
              </div>
    
              <div class = "purchase-info">
                <input type = "number" min = "0" value = "1">
                <button type = "button" class = "btn">
                  Add to Cart <i class = "fas fa-shopping-cart"></i>
                </button>
                
              </div>
              <div class="container">
                <div class="row">
                        <div class="col-12 col-md-6 ">
                            <form action="{{route('revisor.accept_article',['article'=>$article_to_check])}}"method='POST'>
                            @csrf
                            @method('PATCH')
                            <button type="submit"class="btn btn-success shadow">{{__('ui.accept')}}</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <form action="{{route('revisor.reject_article',['article'=>$article_to_check])}}"method='POST'>
                            @csrf
                            @method('PATCH')
                            <button type="submit"class="btn btn-danger shadow">{{__('ui.refuse')}}</button>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
          </div>
        </div>
        
        @endif

</x-layout>