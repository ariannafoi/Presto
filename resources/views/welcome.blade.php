<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <div class="section-custom">
                    <h1 class="display-1 title-custom">P R E S T O</h1>
                    <p class="lead subtitle-custom">La soluzione rapida ai tuoi bisogni</p>
                </div>
                <div>
                    <form class="d-flex ps-1 searchbar-custom" role="search" method="GET" action="{{route('article.search')}}">
                        <input class="form-control me-2" type="search" placeholder="Cerca qui i tuoi prodotti" aria-label="Search" name="searched">
                        <button class="btn btn-outline-success" type="submit">Cerca</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center h-100">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 text-center card-space justify-content-center d-flex">
                <x-card 
                :article="$article"

                />
            </div>
            @endforeach
            
        </div>
    </div>

</x-layout>