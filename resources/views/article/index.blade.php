<x-layout>
    <x-carouselCategory></x-carouselCategory>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.allAnnouncements')}}</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid w-100">
        <div class="row justify-content-center h-100">
           <div class="col-12 p-0">
            <form class="d-flex" method="GET" action="{{route('article.search')}}">
                <input type="text" placeholder="{{__('ui.searchHere')}}" name="searched">
                    <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        @forelse ($articles as $article)
     <div class="col-12 col-sm-4 col-xxl-3 text-center my-4 d-flex justify-content-center">
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
            
            {{$articles->links()}}
            
        </div>
    </div>

</x-layout>