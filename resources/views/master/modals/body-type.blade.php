
<!-- amenitiesModal -->
<div class="modal fade" id="amenitiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form wire:submit.prevent='{{$showEditModal ? 'updateAmenity' :'createAmenity'}}''>
            <div class="modal-content">
                <div class="modal-header">
                    @if ($showEditModal)
                    <h5 class="modal-title" id="exampleModalLabel">Edit Amenity</h5>
                    @else
                    <h5 class="modal-title" id="exampleModalLabel">Add New Amenity</h5>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Amenity Name</label>
                        <input wire:model.defer="amenity_name" type="text" name="amenity_name" id="" class="form-control @error("amenity_name") is-invalid @enderror">
            @error("amenity_name")
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
