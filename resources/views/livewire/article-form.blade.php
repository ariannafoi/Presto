<div>
                <form>
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Descrizione</label>
                      <textarea cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control">
                      </div>
                    <button type="submit" class="btn btn-primary">Crea Annuncio</button>
                </form>
</div>
