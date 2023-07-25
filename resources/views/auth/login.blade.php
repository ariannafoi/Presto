<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1">Accedi</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 py-4">
                
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <a href="{{route('login')}}">Non sei ancora registrato? Registrati</a>
                </form>
            </div>
        </div>
    </div>

    


</x-layout>