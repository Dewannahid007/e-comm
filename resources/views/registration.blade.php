            @extends('master')
            @section('content')
            <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                            <form action="registrationF" method="POST">
                                @csrf
                                
                                <div class="form-group form-outline flex-fill mb-0">
                              <input type="text" name="name" class="form-control"  placeholder="Your Name">
                              <span style="color: red;"> @error('name') {{$message}}  @enderror</span>
                              <br>
                             </div>
                             <div class="form-group form-outline flex-fill mb-0">
                              <input type="email" name="email" class="form-control"  placeholder="Your Email">
                              <span style="color: red;"> @error('email') {{$message}} @enderror </span>
                              <br>
                             </div>
                             <div class="form-group form-outline flex-fill mb-0">
                              <input type="number" name="pnumber" class="form-control"  placeholder="Your Phone Number">
                              <span style="color: red;"> @error('pnumber') {{$message}} @enderror </span>
                              <br>
                             </div>

                               <div class="form-group form-outline flex-fill mb-0">
                              <input type="password" name="password" class="form-control"  placeholder="Type a Password">
                              <span style="color: red;"> @error('password') {{$message}} @enderror </span>
                              <br>
                             </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>

                            </form>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            @stop