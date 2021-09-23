<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sumotrips Registration</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1">Car Dealership</a>
            </div>
            <div class="card-body">


                <form action="{{route('register')}}" method="POST">
                    @csrf

                    <input type="hidden" name="user_type" value="user" id="">

                    {{-- <div class="input-group mb-3  ">

                        <select name="user_type" class="form-control  @error('user_type') is-invalid

                        @enderror" value="{{old('user_type')}}">
                    <option value="" selected>Register As</option>
                    <option value="vendor">Vendor</option>
                    <option value="agent">Agent</option>

                    </select>
            </div> --}}

            @error('user_type')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="input-group mb-3  ">
                <input type="text" class="form-control @error('first_name')is-invalid

                        @enderror" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

            </div>
            @error('first_name')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <div class="input-group mb-3  ">
                <input type="text" class="form-control @error('last_name')is-invalid

                        @enderror" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>

            </div>
            @error('last_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="input-group mb-3  ">
                <input type="email" class="form-control @error('email')is-invalid

                        @enderror" placeholder="Email" name="email" value="{{old('email')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="input-group mb-3  ">
                <input type="text" class="form-control @error('phone') is-invalid

                        @enderror" placeholder="Phone" name="phone" value="{{old('phone')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror

            {{-- <div class="input-group mb-3  ">
                        <input type="text" class="form-control @error('company')is-invalid

                        @enderror" placeholder="Company/Organization Name" name="company" value="{{old('company')}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-briefcase"></span>
                </div>
            </div>

        </div> --}}


        <div class="input-group mb-3  ">
            <input type="password" class="form-control @error('password') is-invalid

                        @enderror" placeholder="Password" name="password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="input-group mb-3  ">
            <input type="password" class="form-control @error('password_confirmation') is-invalid

                        @enderror" placeholder="Retype password" name="password_confirmation">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @error('password_confirmation')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="row">
            <div class=" -8">
                <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                        I agree to the <a href="#">terms & conditions</a>
                    </label>
                </div>
            </div>
            <!-- /.  -->
            <div class=" -4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.  -->
        </div>

        </form>

        {{-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> --}}

        <a href="{{route('login')}}" class="text-center">already registered? Login</a>
    </div>
    <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
</body>

</html>
