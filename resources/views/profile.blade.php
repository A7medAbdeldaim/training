@extends('layouts.app')
@section('title', 'Edit Profile')

@section('content')

    <!-- ======= About Section ======= -->

    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Profile</h2>
                <p>Edit Profile</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <form action="{{ route('profile.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control"
                               placeholder="Enter User Name" name="name"
                               value="{{ auth('trainers')->user()->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control"
                               placeholder="Enter User Email" name="email"
                               value="{{ auth('trainers')->user()->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="form-control"
                               placeholder="Enter User Phone" name="phone"
                               value="{{ auth('trainers')->user()->phone }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control"
                               placeholder="Enter User Address" name="address"
                               value="{{ auth('trainers')->user()->address }}" required>
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control">{{ auth('trainers')->user()->bio }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="video">Video</label>
                        <input type="file" id="video" class="form-control" name="video">
                    </div>

                    <div class="form-group">
                        <label for="password">User Password</label>
                        <input type="password" class="form-control" id="password"
                               placeholder="User Password" name="password"
                               required>
                    </div>
                    <div class="form-group">
                        <label
                            for="confirm_password">Re-enter User Password</label>
                        <input type="password" class="form-control" id="confirm_password"
                               placeholder="Re-enter User Password"
                               name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End About Section -->
@endsection
