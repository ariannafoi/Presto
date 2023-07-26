<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Presto</h1>
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
                <div class="col-12">
                    <p class="h1">
                        Non sono presenti annunci per questa categoria!
                    </p>
                    <p class="h2">
                        Pubblicane uno: <a href="{{route('create')}}" class="btn btn-success shadow">Nuovo Annuncio</a>
                    </p>
                </div>
            @endforelse
            
        </div>
    </div>

</x-layout>