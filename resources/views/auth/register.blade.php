@extends('layouts.auth')

@section('content')
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="exampleFirstName"
                                   name="name" placeholder="First Name">
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="form-group">
                                        <select class="@error('is_user') is-invalid @enderror" value="Role" name="is_user" id="role">
                                          <option name="is_user"  value="Admin">Admin</option>
                                          <option name="is_user"  value="Employee">Employee</option>
                                        </select>
                                        @error('is_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                               
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail"
                                placeholder="Email Address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password"  placeholder="Password"  name="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="password_confirmation" class="form-control form-control-user @error('password') is-invalid @enderror"  required autocomplete="new-password"
                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                                    
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
</button>
                        <hr>
                        <a href="index" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="password/reset">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection
