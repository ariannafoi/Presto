<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1 class="display-1 title-custom">P R E S T O</h1>
                <p class="lead subtitle-custom">La soluzione rapida ai tuoi bisogni</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center h-100">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 text-center my-5 justify-content-center d-flex">
                <x-card 
                :article="$article"

                />
            </div>
            @endforeach
            
        </div>
    </div>

</x-layout>