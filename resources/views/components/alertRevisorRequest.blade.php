
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
         {{$message}}
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="crea-custom btn" data-bs-dismiss="modal">Chiudi</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
    
       const myModal = new bootstrap.Modal('#exampleModal', {
        keyboard: false
    })
    const modalToggle = document.getElementById('toggleMyModal'); myModal.show(modalToggle)
  </script>
