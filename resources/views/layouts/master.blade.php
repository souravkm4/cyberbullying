<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REPORT CYBERBULLYING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
   
     .lead { font-size: 0.5rem; font-weight: 30; }
     .container { margin: 150px auto; max-width: 960px; }
     </style>
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase" style="font-size: 25;">Cyberbullying</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>cyb123@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91 987654321</small>
                        </div>
                    </div>
                    
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase" style="font-size: 25;">Cyberbullying</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('/')}}" class="nav-item nav-link ">Home</a>
                            <a href="{{route('aboutus')}}" class="nav-item nav-link ">About</a>
                            <a href="{{route('contactus')}}" class="nav-item nav-link">Contact</a>
                            <a href="{{route('login')}}" class="nav-item nav-link  ">login</a>
                            <a href="{{route('blog')}}" class="nav-item nav-link ">Blog</a>
                            <a href="{{route('resource')}}" class="nav-item nav-link ">Resources</a>
                        </div>
                    
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">2 Street, KOCHI, KERALA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">cyb123@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+91 987654321</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
            <a class="text-white mb-2" href="{{route('/')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="{{route('aboutus')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="{{route('blog')}}"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    <a class="text-white mb-2" href="{{route('contactus')}}"><i class="fa fa-angle-right mr-2"></i>Contact us</a>
                   
                
              
            </div>
           
            
            
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">CYBERBULLYING</a>. All Rights Reserved.</p>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
   
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/jquery.star-rating.js')}}"></script>

<script>
  $('.rating').starRating(
  {
    starSize: 1,
    //showInfo: true
  });

   $(document).on('change', '.rating',
        function (e, stars, index) {
           // alert(`Thx for ${stars} stars!`);
           blogid=$(this).data('value');
           
           starcount = stars;
          $.ajax({type:'POST',
           url:"{{ route('rating') }}",
           data:{ccount:starcount, blog:blogid,_token: '{{csrf_token()}}' },
           success:function(data)
            {

               //alert(data);
            }});
       
        });
</script>