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
                Have realy delete this?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
         
            <form action=" {{ route('admin.categorie.destroy', $category) }}" method="post">
              @csrf
              @method('delete')
          <button type="submite" class="btn btn-danger"> Yes
          </button>

           </form>
        </div>
      </div>
    </div>
  </div>