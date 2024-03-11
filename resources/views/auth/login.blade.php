@include('layout.head')
<body>
    <section class="vh-100">
        <div class="containerr h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="cards" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5"><img src="{{asset('images/logo.png')}}" width="160px" alt=""></p>

                                    <div class="wizard-form">
                                        <div class="ff">
                                            <div>
                                                <h3 style="text-align: center; margin-bottom: 40px;">We are The Apon Team</h6>
                                            </div>

                                            <!-- step1 start -->
                                            <div id="step1" class="step active">
                                                <div class="step-title text-dark">Please login to your account</div>

                                                <!-- my start -->

                                                <!-- my end -->

                                                <div class="form-group text-dark">
                                                    <label for="name">User Name:</label>

                                                    <input class="input--style-1" id="input-group" type="text" name="name">
                                                </div>
                                                <div class="form-group text-dark">
                                                    <label for="name">Password:</label>
                                                    <input class="input--style-1" id="input-group" type="text" name="Last Name">
                                                </div>

                                                <div class="text-center ">
                                                    <button class="btn btn-block fa-lg  mb-3" type="button" style="background-color: #ce1266; color: white; padding: 20px;">Log
                                                        in</button>
                                                    <a class="text-muted" href="#!">Forgot password?</a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2 text-dark">Don't have an account?</p><a href="./signup.html"></a>

                                                    <a href="signup_main_page26.html"><button type="button" class="btn btn-outline-dark">
                                                            Create new
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-6 align-items-center order-1 order-lg-2" style="margin-top: 110px;">
                                    <h1 class="text-dark" style=" text-align: center;">
                                        Sign Up
                                    </h1>
                                    <h1 class="text-dark" style=" text-align: center;">
                                        Good to see you here!
                                    </h1>
                                    <div class="mt-5">
                                        <img src="{{asset('images/Apon logo icon-01(1).png')}}" width="2900px" class="img-fluid" alt="Sample image">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@include('layout.footer')