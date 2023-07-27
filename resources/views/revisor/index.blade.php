<x-layout>
<div class="container-fluid">
    <div class="row justify-content-center h">
        <div class="col-12 ">
            <h1 class="display-1 title-custom">{{$article_to_check ? 'Ecco l\'annuncio da revisionare ': 'Non ci sono annunci da revisionare'}}</h1>
            <p class="lead subtitle-custom"></p>
        </div>
    </div>
</div>
@if ($article_to_check)
    
    <div class="container">
        <div class="row ">
         <div class="col-12 ">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade ">
                <div class="carousel-inner justify-content-center ">
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/200/200" class="" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/201" class=""  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/202" class=""  alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                <h5 class="card-title">Titolo: {{$article_to_check->title}}</h5>
                <p class="card-text">Descrizione: {{$article_to_check->body}}</p>
                <p class="card-text">Pubblicato il {{$article_to_check->created_at->format('d/m/Y')}}</p>
              </div>
        </div>
           
        <div class="row ">
                <div class="col-12 col-md-6 ">
                    <form action="{{route('revisor.accept_article',['article'=>$article_to_check])}}"method='POST'>
                    @csrf
                    @method('PATCH')
                    <button type="submit"class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 ">
                    <form action="{{route('revisor.reject_article',['article'=>$article_to_check])}}"method='POST'>
                    @csrf
                    @method('PATCH')
                    <button type="submit"class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
                
            </div>
        </div>
        
         @endif
    </x-layout>