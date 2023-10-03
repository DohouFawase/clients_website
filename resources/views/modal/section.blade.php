<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Delete</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
            Être vous sure de vouloire supprime cette Section ?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Nom
          </button>
          
            <form action=" {{ route('admin.section.destroy', $section) }}" method="post">
              @csrf
              @method('delete')
              <button type="submite" class="btn btn-danger"> Oui </button>
           </form>
         
        </div>
      </div>
    </div>
  </div>