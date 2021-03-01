@extends('layouts.auth_layout')
@section('title', 'Login')

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
                                    <h3>Sign In to <strong>CBRS</strong></h3>
                                    <p class="mb-4">Welcome to our store.</p>
                                </div>
                                @include('layouts.errors')

                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="username">Email</label>
                                        <input type="email" class="form-control" id="username" name="email" value="{{ old('email') }}">

                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">

                                    </div>

                                    <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-0"><span
                                                class="caption">Remember me</span>
                                            <input type="checkbox" checked="checked"/>
                                            <div class="control__indicator"></div>
                                        </label>
                                        <span class="ml-auto"><a href="#" class="forgot-pass" style="display:none;">Forgot Password</a></span>
                                    </div>

                                    <input type="submit" value="Log In"
                                           class="btn btn-pill text-white btn-block btn-primary">

                                </form>
                                <br>
                                <a href="{{ route('register') }}"
                                   class="btn btn-pill btn-link text-white btn-block btn-primary">Sign Up </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
