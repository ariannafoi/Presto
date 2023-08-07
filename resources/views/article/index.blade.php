<x-layout>
    {{-- <x-carouselCategory></x-carouselCategory> --}}

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-xl-9 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.allAnnouncements')}}</h1>
            </div>

            <div class="container w-100">
                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-3 pt-4">
                        <div class="">
                            <form class="sb form-control" method="GET" action="{{route('article.search')}}">
                                <input type="text" placeholder="{{__('ui.searchHere')}}" class="input-sb" name="searched">
                                <button type="submit" class="btn-custom-bar"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #005555;"></i></button>
                            </form>
                        </div>
                    </div>
                <div class="col-12 col-sm-12 col-xl-9">
                    <div class="row">
            @forelse ($articles as $article)
                    <div class="col-12 col-sm-6 col-xl-4 text-center my-4 d-flex justify-content-center">
                        <x-card 
                        :article="$article"
                        />
                    </div>
                @empty
                    <div class="col-12 my-4">
                        <div class="alert alert-warning py-2 shadow">
                            <p class="lead">{{__('ui.empty')}}</p>
                        </div>
                    </div>
            @endforelse
                    </div>
                </div>
        
               
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 paginate-custom mt-5">
                                {{$articles->links()}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


        </div>
    </div>


</x-layout>