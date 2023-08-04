<x-layout>


    <div class="container-lr-custom">
        <div class="login__content">
            <img src="img/bg-form1.jpg" alt="login image" class="login__img">

            <form class="login__form" method="post" action="{{route('login')}}">
                @csrf
                <div>
                    <h1 class="login__title">
                        <span>{{__('ui.welcomeBack')}}</span>
                    </h1>
                </div>
                
                <div>
                    <div class="login__inputs">
                        <div>
                            <label class="login__label">Email</label>
                            <input type="email" placeholder="{{__('ui.writeEmail')}}" required class="login__input"name="email">
                            @error('email') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label class="login__label">Password</label>
                            <div class="login__box">
                                <input type="password" placeholder="{{__('ui.writePassword')}}" required class="login__input" id="input-pass" name="password">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                                @error('password') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="login__buttons d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="login__button login__button-ghost">{{__('ui.access')}}</button>
                        <a href="{{route('register')}}" class="login__forgot">{{__('ui.signUpRequest')}}</a>
                    </div>

                </div>
            </form>
        </div>
    </div>

</x-layout>