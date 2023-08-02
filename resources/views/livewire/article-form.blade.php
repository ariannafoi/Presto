<div>
                <form wire:submit.prevent="save" >
                    @csrf
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
                        <input type="file" name="images" class="form-control shadow @error('temporary_images.*') is-invalid @enderror" wire:model="temporary_images" multiple>
                        @error('temporary_images') <p class="error alert alert-danger">{{ $message }}</p> @enderror
                      </div>
                      @if (!empty($images))
                          <div class="row">
                            <div class="col-12">
                              <p>
                                {{__('ui.previewPhoto')}} 
                              </p>
                              <div class="row border border-4 border-info rounded shadow py-4 mb-3">
                                @foreach ($images as $key => $image)
                                    <div class="col my-3">
                                      <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">

                                      </div>
                                      <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">Cancella</button>
                                    </div>
                                @endforeach
                              </div>
                            </div>
                          </div>                        
                      @endif
                    <button type="submit" class="btn crea-custom">{{__('ui.createAnnouncementBtn')}}</button>
                </form>
</div>
