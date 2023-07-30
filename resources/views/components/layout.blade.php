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
    {{-- <x-header></x-header> --}}

    <div class="container">
        <div class="row">
            <div class="col-12 space-custom">
                <div class="min-vh-100">

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
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    @livewireScripts
    <script src="https://kit.fontawesome.com/9240e71097.js" crossorigin="anonymous"></script>
</body>
</html>