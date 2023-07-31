<div>
                <form wire:submit.prevent="save" >
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo</label>
                      <input type="text" class="form-control" wire:model.lazy="title">
                      @error('title') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Descrizione</label>
                      <textarea cols="30" rows="10" class="form-control" wire:model.lazy="body"></textarea>
                      @error('body') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" wire:model.lazy="price">
                        @error('price') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select wire:model.defer="category" class="form-control" id="category">
                          <option value="">Scegli la categoria</option>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                        @error('category') <div class="error alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                    <button type="submit" class="btn crea-custom">Crea Annuncio</button>
                </form>
</div>
