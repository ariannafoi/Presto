<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">Registrati</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3 font-scritte">
                        <label class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" placeholder="Inserire nome utente" name="name">
                        @error('name') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                    <div class="mb-3 font-scritte">
                      <label class="form-label ">Indirizzo Email</label>
                      <input type="email" class="form-control" placeholder="Inserire indirizzo e-mail" name="email">
                      @error('email') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 font-scritte">
                      <label class="form-label ">Password</label>
                      <input type="password" class="form-control" placeholder="Inserisci password" name="password">
                      @error('password') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 font-scritte">
                        <label class="form-label font-scritte">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation"placeholder="Conferma la password">
                        @error('password_confirmation') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                    <button type="submit" class="btn btn-primary font-scritte">Registrati</button>
                    <a href="{{route('login')}}">Hai già un account? Accedi</a>
                </form>
            </div>
        </div>
    </div>

</x-layout>