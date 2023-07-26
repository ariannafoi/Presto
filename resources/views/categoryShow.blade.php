<x-layout>
    
    <div class="container-fluid mt-3">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Tutti i prodotti in {{$category->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center h-100">
            @forelse ($category->articles as $article)
            <div class="col-12 col-md-4 text-center my-4">
                <x-card 
                :article="$article"
                />
            </div>
            @empty
                <div class="col-12 mt-4">
                    <p class="h2">
                        Non sono presenti annunci per questa categoria!
                    </p>
                    <p class="h3">
                        Pubblicane uno: <a href="{{route('create')}}" class="btn btn-success shadow">Nuovo Annuncio</a>
                    </p>
                </div>
            @endforelse
            
        </div>
    </div>

</x-layout>