<x-layout>
    <x-carouselCategory></x-carouselCategory>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-3 col-xl-3"></div>
            <div class="col-12 col-sm-9 col-xl-9 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.allAnnouncements')}}</h1>
            </div>
        </div>
    </div>

        <div class="container w-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-sm-3 col-xl-3 p-2">
                    <form class="d-flex" method="GET" action="{{route('article.search')}}">
                        <input class="form-control" type="text" placeholder="{{__('ui.searchHere')}}" name="searched">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <p class="text-center my-3">Filtra per categoria</p>
                    @foreach ($categories as $category)
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$category->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
            <div class="col-12 col-sm-9 col-xl-9">
                <div class="row">
        @forelse ($articles as $article)
                <div class="col-12 col-sm-6 col-xl-4 text-center my-4 d-flex justify-content-center">
                    <x-card 
                    :article="$article"
                    />
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{__('ui.empty')}}</p>
                    </div>
                </div>
        @endforelse
                </div>
            </div>

            {{$articles->links()}}
            
        </div>
    </div>

</x-layout>