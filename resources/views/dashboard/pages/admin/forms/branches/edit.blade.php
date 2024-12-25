<div class="modal fade" id="editModal_{{$branch->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form data-endpoint="{{route('branches.update',$branch->id)}}" method="POST" class="ajax-form"> 
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit {{$branch->branch_name}}</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <input type="hidden" name="id" value="{{$branch->id}}">
            <div class="input-group input-group-static mb-4">
              <label>Group Name</label>
              <input type="text" id="group_name" name="group_name" class="form-control" value="{{$branch->group_name}}" required>
            </div>
            <div class="input-group input-group-static mb-4">
              <label>Branch Name</label>
              <input type="text" id="branch_name" name="branch_name" class="form-control" value="{{$branch->branch_name}}" required>
            </div>
            <div class="input-group input-group-static mb-4">
              <label>Branch Address</label>
              <input type="text" id="branch_address" name="branch_address" class="form-control" value="{{$branch->branch_address}}" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn bg-gradient-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>