{{-- <x-layout>

     --}}
    
    {{-- <div class="container-fluid">
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
    </div> --}}

    {{-- <div class="container">
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


</x-layout> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <x-navbar></x-navbar>
    <x-header></x-header>

    <div class="container-fluid">
        <div class="row ultimi-annunci-custom ">
            <div class="col-12 text-center mt-5">
                <p class="text-ultimi-annunci">
                    Ecco gli ultimi annunci inseriti:
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 space-custom">
                <div class="">

                    @if (session()->has('message'))
                        <div class="alert alert-success message-space">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session()->has('access-denied'))
                        <div class="alert alert-danger message-space">
                            {{ session('access-denied') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row justify-content-center h-100">
                            @foreach ($articles as $article)
                            <div class="col-12 col-md-3 text-center card-space mt-5 justify-content-center d-flex">
                                <x-card 
                                :article="$article"
                
                                />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    @livewireScripts
    <script src="https://kit.fontawesome.com/9240e71097.js" crossorigin="anonymous"></script>
</body>
</html>