<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1>Un utente ha richiesto di lavorare con noi</h1>
                <h2>I suoi dati:</h2>
                <p>Nome: {{$user->name}}</p>
                <p>Email: {{$user->email}}</p>
                <p>Se vuoi renderlo revisore clicca qui:</p>
                <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
            </div>
        </div>
    </div>

</x-layout>