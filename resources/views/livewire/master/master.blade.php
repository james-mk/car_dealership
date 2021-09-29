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







@endsection
