<div class="container pt-5 mt-5">
    <div class="row justify-content-center d-flex">
            <div class="wrapper__category">

                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel__category ps-0">
                        @php
                            $counter = 1;
                        @endphp

                        @foreach ($categories as $category)
                        <div class="col-12">
                            <a href="{{route('categoryShow', compact('category'))}}" class="text_category">
                                <li class="card__category__cst">
                                    <div class="img__category"><img src="/img/icons/cp{{$counter}}.png" alt="img" draggable="false"></div>
                                    <h2>{{$category->name}}</h2>
                                </li>
                            </a>
                        </div>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</div>