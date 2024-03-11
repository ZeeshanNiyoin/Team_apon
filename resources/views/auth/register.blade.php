@extends('auth.layout.app')

@section('title', 'Sing Up')

@section('content')
<section class="d-flex align-items-center justify-content-center">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-9 col-lg-6 p-5">
            <img src="{{asset('user/img/login_images-removebg-preview.png')}}" class="img-fluid" alt="Sample image" width="820px" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <div class="logo">
                        <img src="{{asset('user/img/logo.jpg')}}" alt="" width="140px" />
                    </div>
                </div>

                <div class="divider d-flex align-items-center my-4"></div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">First Name</label>
                    <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter First Name" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email Address</label>
                    <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <p class="small fw-bold mt-2 pt-1 mb-0">
                        Already a member?
                        <a href="/login" class="link-danger">Log In</a>
                    </p>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">
                        Sing Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection