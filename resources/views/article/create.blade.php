<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 font-titolo">{{__('ui.createAnnouncement')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:article-form
                category="$category"
                />
            </div>
        </div>
    </div>

</x-layout>