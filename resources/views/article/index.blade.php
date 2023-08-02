<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.allAnnouncements')}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center h-100">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 text-center my-4 d-flex justify-content-center">
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