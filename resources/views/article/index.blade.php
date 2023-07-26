<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Tutti Gli Annunci</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center h-100">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 text-center my-4">
                <x-card 
                :article="$article"

                />
            </div>
            @endforeach
            
            {{$articles->links()}}
            
        </div>
    </div>

</x-layout>