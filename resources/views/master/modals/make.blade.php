
<!-- amenitiesModal -->
<div class="modal fade" id="makeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form wire:submit.prevent='{{$showEditModal ? 'updateMake' :'createMake'}}''>
            <div class="modal-content">
                <div class="modal-header">
                    @if ($showEditModal)
                    <h5 class="modal-title" id="exampleModalLabel">Edit Make</h5>
                    @else
                    <h5 class="modal-title" id="exampleModalLabel">Add New Make</h5>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Make Name</label>
                        <input wire:model.defer="make_name" type="text" name="make_name" id="" class="form-control @error("make_name") is-invalid @enderror">
            @error("make_name")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>
        Cancel</button>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
        @if ($showEditModal)
        <span>Save Changes</span>
        @else
        <span>Save</span>
        @endif </button>
</div>
</div>
</form>
</div>
</div>
