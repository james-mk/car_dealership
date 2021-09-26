<div>
    <div class="d-flex justify-content-end mb-2">
        <button wire:click.prevent='addMake' class="btn btn-sm btn-info"><i class="fa fa-plus-circle mr-1 mb-2"></i> Add
            Make</button>
    </div>
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Properties</h5>  --}}
    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Make Name</th>
                        <th scope="col">Action</th>
    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($makes as $make)
    
    
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$make->make_name}}</td>
                        <td>
                            <a wire:click.prevent='editMake({{$make}})' href=""><i class="fa fa-edit mr-2"></i></a>
                            <a wire:click.prevent='confirmDeleteMake({{$make->id}})' href=""><i
                                    class="fa fa-trash text-danger"></i></a>
                        </td>
    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer bg-white d-flex justify-content-end">
                {{$makes->links()}}
            </div>
    
        </div>
    
    </div>
</div>