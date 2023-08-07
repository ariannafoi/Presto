{{-- FOOTER NUOVO --}}
<div class="pt-custom">
  <footer class="footer">

    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>

    <ul class="social-icon ps-0">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>

    <ul class="menu ps-0">
      <li class="menu__item"><a class="menu__link f-color" href="#">{{__('ui.home')}}</a></li>
      <li class="menu__item"><a class="menu__link f-color" href="#">{{__('ui.about')}}</a></li>
      <li class="menu__item"><a class="menu__link f-color" href="#">{{__('ui.services')}}</a></li>
      <li class="menu__item"><a class="menu__link f-color" href="#">{{__('ui.team')}}</a></li>
      <li class="menu__item"><a class="menu__link f-color" href="#">{{__('ui.contact')}}</a></li>
    </ul>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 text-center">
          <p>{{__('ui.becomeRevisor')}}</p>
          <a href="{{route('become.revisor')}}" class="btn btn-warning shadow text-light">{{__('ui.becomeRevisorBtn')}}</a>
        </div>
      </div>
    </div>
    <p class="f-color text-center">&copy;2023 I Prodigy Six | All Rights Reserved</p>
  </footer>
  @if (session()->has('message'))
    <x-alertRevisorRequest :message="session('message')"></x-alertRevisorRequest>
  @endif 

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</div>