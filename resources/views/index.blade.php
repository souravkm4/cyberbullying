@extends('layouts.master')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/lp.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Cyberbullying Report Portal</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('register')}}">Register</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We prepared to oppose for you</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="position-relative h-100 rounded overflow-hidden">
                    
                    <img class="position-absolute w-100 h-100" src="img/cyb.webp" style="object-fit: cover;">
             
            </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                <img src="img/about.jfif" width="100%"
  height="auto">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">WE MAINTAIN STRICT CONFIDENTIALITY</h2>
                    
                    <h1 class="mb-4">We Provide Reliable And Effective  Help To Victims Of Cyberbullying</h1>
            
                </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
   

      

      
        
    @endsection
