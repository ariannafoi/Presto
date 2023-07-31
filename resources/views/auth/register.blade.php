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




    <div class="container">
        <div class="login__content">
            <img src="/public/img/bg-form.jpg" alt="login image" class="login__img">

            <form action="" class="login__form">
                <div>
                    <h1 class="login__title">
                        <span>Welcome</span> Back
                    </h1>
                    <p class="login__description">
                        Welcome! Please login to continue.
                    </p>
                </div>
                
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">Username</label>
                            <input type="email" placeholder="Enter your email address" required class="login__input">
                        </div>
                        <div>
                            <label for="" class="login__label">Email</label>
                            <input type="email" placeholder="Enter your email address" required class="login__input">
                        </div>

                        <div>
                            <label for="" class="login__label">Password</label>

                            <div class="login__box">
                                <input type="password" placeholder="Enter your password" required class="login__input" id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                        <div>
                            <label for="" class="login__label">Conferma Password</label>

                            <div class="login__box">
                                <input type="confirmation_password" placeholder="Enter your password" required class="login__input" id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="login__check">
                        <input type="checkbox" class="login__check-input">
                        <label for="" class="login__check-label">Remember me</label>
                    </div>
                </div>

                <div>
                    <div class="login__buttons">
                        <button class="login__button">Log In</button>
                        <button class="login__button login__button-ghost">Sign Up</button>
                    </div>

                    <a href="#" class="login__forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>