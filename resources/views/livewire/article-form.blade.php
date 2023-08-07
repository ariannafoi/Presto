<div>
                <form wire:submit.prevent="save">
                    @csrf
                    <div class="border__container p-3 mb-4">

                      <div class="mb-3">
                        <label class="form-label">{{__('ui.title')}}</label>
                        <input type="text" class="form-control" wire:model.lazy="title">
                        @error('title') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label">{{__('ui.description')}}</label>
                        <textarea cols="30" rows="10" class="form-control" wire:model.lazy="body"></textarea>
                        @error('body') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('ui.price')}}</label>
                          <input type="number" class="form-control" wire:model.lazy="price">
                          @error('price') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                          <label for="category" class="form-label">{{__('ui.category')}}</label>
                          <select wire:model.defer="category" class="form-control" id="category">
                            <option hidden value="pippo">{{__('ui.selectCategory')}}</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                          @error('category') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                          <label for="images" class="drop-container" id="dropcontainer">
                            <span class="drop-title">
                              {{__('ui.uploadFiles')}}
                            </span>
                            <input type="file" name="images" multiple class="shadow @error('temporary_images.*') is-invalid @enderror" wire:model="temporary_images">
                            @error('temporary_images') <p class="error alert alert-danger">{{ $message }}</p> @enderror
                          </label>
                        </div>
                    </div>
                      @if (!empty($images))
                      <div class="row">
                        <div class="col-12 text-center">
                          <div class="row border rounded shadow py-4 mb-3">
                            @foreach ($images as $key => $image)
                                <div class="col-6 my-3">
                                  <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">
                                  </div>
                                  <button class="btn"><i class="fa-regular fa-circle-xmark fa-3x mt-1" style="color: #d40c0c;" type="button" wire:click="removeImage({{$key}})"></i></button>
                                </div>
                            @endforeach
                          </div>
                        </div>
                      </div>                        
                  @endif
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn crea-custom">{{__('ui.createAnnouncementBtn')}}</button>
                  </div>
                </form>
                @if (session()->has('message'))
                <x-alertSuccess :message="session('message')"></x-alertSuccess>
                 @endif 
                              
</div>
