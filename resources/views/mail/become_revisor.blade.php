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
    
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                        <h1 class="display-2 title-custom">P R E S T O</h1>
                        <p class="lead subtitle-custom">La soluzione rapida ai tuoi bisogni</p>
                </div>
            </div>
        </div>
        
            
            <div class="container-fluid pt-3">
                <div class="row justify-content-center h-100">
                    <div class="col-12 text-center pt-2">
                        <h1>Un utente ha richiesto di lavorare con noi</h1>
                        <h2>I suoi dati:</h2>
                        <p>Nome: {{$user->name}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>Se vuoi renderlo revisore clicca qui:</p>
                        <button class="button-mail"><a href="{{route('make.revisor', compact('user'))}}" class="text-white">Rendi revisore</a></button>
                    </div>
                </div>
            </div>

            <div class="py-5 text-center bold"><p>&copy;2023 I Prodigy Six | All Rights Reserved</p></div>
    
        @livewireScripts
        <script src="https://kit.fontawesome.com/9240e71097.js" crossorigin="anonymous"></script>
    </body>
    </html>