<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <x-navbar></x-navbar>
    <x-header></x-header>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                @php
                    $counter = 1;
                @endphp

                @foreach ($categories as $category)
                <div class="col-lg-3 col-6">
                    <a href="{{route('categoryShow', compact('category'))}}">
                        <div class="service-item-category position-relative text-center">
                            <div class="service-text-category text-center align-items-center d-flex flex-column">
                                <img class=" icon-category" src="img/icons/cp{{$counter}}.png" alt="Icon">
                                <h3 class="pb-4">{{$category->name}}</h3>
                            </div>
                        </div>
                    </a>
                </div>

                @php
                    $counter++;
                @endphp
                
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ultimi-annunci-custom">
            <div class="col-12 text-center mt-5">
                <p class="text-ultimi-annunci">
                    {{__('ui.latestArticles')}}
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
                            <div class="col-12 col-md-6 col-lg-3 text-center card-space mt-5 justify-content-center d-flex">
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