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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <x-navbar></x-navbar>

    <div class="container">
        <div class="row ">
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
    <script src="https://kit.fontawesome.com/1737bc3b65.js" crossorigin="anonymous"></script>
</body>
</html>