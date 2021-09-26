@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Master </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Add Master</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            {{-- @include('alerts.flash-message') --}}
            <div class="row">
                <div class="col-lg-6">
                    @include('master.forms.make')
                </div>
                <div class="col-lg-6">
                    {{-- @include('master.forms.model') --}}
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    {{-- @include('master.forms.transmission') --}}
                </div>
                <div class="col-lg-6">
                    {{-- @include('master.forms.drive-train') --}}
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    {{-- @include('master.forms.fuel') --}}
                </div>
                <div class="col-lg-6">
                    {{-- @include('master.forms.features') --}}
                </div>
            </div>
            <!-- /.row -->

            <hr>
            <div class="row">
                <div class="col-lg-6">
                    {{-- @include('master.forms.categories') --}}
                </div>
                <div class="col-lg-6">
                    {{-- @include('master.forms.locations') --}}
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    {{-- @include('master.forms.body-type') --}}
                </div>
                {{-- <div class="col-lg-6">
                    @include('master.forms.color')
                </div> --}}
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


    @include('master.modals.make')


    @push('js')
    <script>
        // window.addEventListener('delete-service', event => {
        //         Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //         if (result.isConfirmed) {
        //          Livewire.emit('deleteserviceConfirmed');
        //         }
        //         })
        // });
        // window.addEventListener('service-deleted', event => {
        //         Swal.fire(
        //         'Deleted!',
        //         'service has been deleted.',
        //         'success'
        //         )
        // });
        // window.addEventListener('delete-facility', event => {
        //         Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //         if (result.isConfirmed) {
        //          Livewire.emit('deletefacilityConfirmed');
        //         }
        //         })
        // });
        // window.addEventListener('facility-deleted', event => {
        //         Swal.fire(
        //         'Deleted!',
        //         'facility has been deleted.',
        //         'success'
        //         )
        // });
        // window.addEventListener('delete-amenity', event => {
        //         Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //         if (result.isConfirmed) {
        //          Livewire.emit('deleteamenityConfirmed');
        //         }
        //         })
        // });
        // window.addEventListener('amenity-deleted', event => {
        //         Swal.fire(
        //         'Deleted!',
        //         'amenity has been deleted.',
        //         'success'
        //         )
        // });
        // window.addEventListener('delete-propertyType', event => {
        //         Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //         if (result.isConfirmed) {
        //          Livewire.emit('deletepropertyTypeConfirmed');
        //         }
        //         })
        // });
        // window.addEventListener('propertyType-deleted', event => {
        //         Swal.fire(
        //         'Deleted!',
        //         'property type has been deleted.',
        //         'success'
        //         )
        // });




        window.addEventListener('show-make-modal', event => {
        $('#makeModal').modal('show');
        });

        window.addEventListener('show-model-modal', event => {
        $('#modelModal').modal('show');
        });
        window.addEventListener('show-confirmation-modal', event => {
        $('#confirmationModal').modal('show');
        });
        window.addEventListener('show-facility-modal', event => {
        $('#confirmationModal').modal('show');
        });
        window.addEventListener('show-amenity-modal', event => {
        $('#amenitiesModal').modal('show');
        });
        window.addEventListener('show-propertyType-modal', event => {
        $('#propertyTypeModal').modal('show');
        });
    </script>

    <script>
        $(document).ready(function(){
        toastr.options={
            "progressBar": true,
        "positionClass": "toast-bottom-right",
        }
        window.addEventListener('hide-service-modal', event => {
        $('#servicesModal').modal('hide');
        toastr.success(event.detail.message,'Success!');
        });
        window.addEventListener('hide-facility-modal', event => {
        $('#facilitiesModal').modal('hide');
        toastr.success(event.detail.message,'Success!');
        });
        window.addEventListener('hide-amenity-modal', event => {
        $('#amenitiesModal').modal('hide');
        toastr.success(event.detail.message,'Success!');
        });
        window.addEventListener('hide-propertyType-modal', event => {
        $('#propertyTypeModal').modal('hide');
        toastr.success(event.detail.message,'Success!');
        });
        window.addEventListener('hide-confirmation-modal', event => {
        $('#confirmationModal').modal('hide');
        toastr.success(event.detail.message,'Success!');
        });
        });
    </script>
    @endpush











@endsection