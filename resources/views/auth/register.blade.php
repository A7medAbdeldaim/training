@extends('layouts.auth_layout')
@section('title', 'Register')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 order-md-2">
                  <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div> -->
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3>Sign up in <strong>Training</strong></h3>
                                </div>
                                @include('layouts.errors')

                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="name"
                                        value="{{ old('name') }}">

                                    </div>
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">

                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="password">Re-Enter Password</label>
                                        <input type="password" class="form-control" id="password" name="password_confirmation">
                                    </div>

                                    <div class="d-flex mb-5 align-items-center">
                                        <span class="ml-auto"><a href="#" class="forgot-pass" style="display:none;">Forgot Password</a></span>
                                    </div>

                                    <input type="submit" value="SignUp" class="btn btn-pill text-white btn-block btn-primary">

                                    <hr>
                                    <div class="d-flex mb-5 align-items-center">
                                        <span class="ml-auto"><a href="{{ route('trainers.showRegistrationForm') }}" class="forgot-pass">Not a Trainee? Register as a Trainer</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
