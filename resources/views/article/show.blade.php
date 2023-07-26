<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Dettaglio di {{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade bg-info">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/200" class="img-fluid" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/201" class="img-fluid"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/202" class="img-fluid"  alt="...">
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
                  </div>
                  <h5 class="card-title">Titolo: {{$article->title}}</h5>
                  <p class="card-text">Descrizione: {{$article->body}}</p>
                  <p class="card-text">Prezzo: {{$article->price}} €</p>
                  <a href="{{route('categoryShow' , ['category' => $article->category])}}" class="btn btn-success">Categoria: {{$article->category->name}}</a>
                  <p class="card-footer">Pubblicato il {{$article->created_at->format('d/m/Y')}} - Autore {{$article->user->name ?? ''}}</p>
            </div>
        </div>
    </div>

</x-layout>