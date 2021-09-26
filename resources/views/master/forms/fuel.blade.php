<div class="d-flex justify-content-end mb-2">
    <button wire:click.prevent='addAmenity' class="btn btn-sm btn-info"><i class="fa fa-plus-circle mr-1 mb-2"></i> Add
        Fuel</button>
</div>
<div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Properties</h5> --}}

        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amenity Name</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($amenities as $amenity)


                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$amenity->amenity_name}}</td>
                    <td>
                        <a wire:click.prevent='editAmenity({{$amenity}})' href=""><i class="fa fa-edit mr-2"></i></a>
                        <a wire:click.prevent='confirmDeleteAmenity({{$amenity->id}})' href=""><i
                                class="fa fa-trash text-danger"></i></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer bg-white d-flex justify-content-end">
            {{$amenities->links()}}
        </div> --}}

    </div>

</div>