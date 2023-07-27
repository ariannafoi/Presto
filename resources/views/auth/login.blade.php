<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Accedi</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 py-4">
                
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label font-scritte" >Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Inserisci il tuo indirizzo e-mail">
                    </div>
                    <div class="mb-3">
                      <label class="form-label font-scritte">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Inserisci la tua password">
                    </div>
                    <button type="submit" class="btn btn-primary font-scritte">Accedi</button>
                    <a href="{{route('register')}}">Non sei ancora registrato? Registrati</a>
                </form>
            </div>
        </div>
    </div>


</x-layout>