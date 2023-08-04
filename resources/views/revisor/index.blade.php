<x-layout>

        <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h1 class="display-1 font-titolo py-4">{{$article_to_check ? __('ui.articleRevision') : __('ui.noAnnouncementRevisor')}}</h1>
              </div>
          </div>
      </div>
      @if ($article_to_check)
        <div class = "card-wrapper-detail mt-2">
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
            <div class = "product-content text-center">
              <h2 class = "product-title">{{__('ui.title')}}: {{$article_to_check->title}}</h2>
              
    
    
              <div class = "product-price">
                
                <p class = "new-price">{{__('ui.price')}}: {{$article_to_check->price}} €</p>
              </div>
    
              <div class = "product-detail">
               
                <p>{{__('ui.description')}}: {{$article_to_check->body}}</p>
                
                <a href="{{route('categoryShow' , ['category' => $article_to_check->category])}}" class="btn btn-success">{{__('ui.category')}}: {{$article_to_check->category->name}}</a>
    
                <p >{{__('ui.publish')}} {{$article_to_check->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article_to_check->user->name ?? ''}}</p>
              
              </div>
              
              

              <div class="container">
                <div class="row">
                  
                  <div class="col-12">
                    <div class="product-detail text-center">
                      <h4 class="tc-accent pb-3">Revisione Immagini</h4>
                      <span>Adulti: <span class="{{$image->adult}}"></span></span>
                      <span>Satira: <span class="{{$image->spoof}}"></span></span>
                      <span>Medicina: <span class="{{$image->medical}}"></span></span>
                      <span>Violenza: <span class="{{$image->violence}}"></span></span>
                      <br>
                      <span>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></span>
                    </div>
                  </div>
                  <div class="col-12 text-center pt-5">
                    @if ($image->labels)
                      @foreach ($image->labels as $label)
                          <p class="d-inline">#{{$label}}</p>
                      @endforeach
                    @endif
                  </div>
                </div>
              </div>


              <div class="container pt-5">
                <div class="row text-center">
                        <div class="col-12 col-md-6 pb-2">
                            <form action="{{route('revisor.accept_article',['article'=>$article_to_check])}}"method='POST'>
                            @csrf
                            @method('PATCH')
                            <button type="submit"class="btn btn-success shadow">{{__('ui.accept')}}</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 pb-2">
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