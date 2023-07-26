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
                    <button type="submit" class="btn btn-primary">Crea Annuncio</button>
                </form>
</div>
