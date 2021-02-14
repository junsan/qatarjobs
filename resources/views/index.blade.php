<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>QatarJobs.Online | Qatar Jobs</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Qatar Jobs<em> Online</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="jobs.html">Jobs</a></li>
                            <li><a href="contact.html">News</a></li>
                            <li><a href="contact.html">Events</a></li>
                            <li><a href="contact.html">About Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            
            <div class="caption">
            	<div class="row">
            		<div class="col-sm">
		                <h2 style="font-size: 50px;">Find the perfect <em>Job</em></h2>
		                <!-- <div class="main-button">
		                    <input type="text" name="search" style="padding: 9px 10px; width: 400px; margin-bottom: 5px;" />
		                    <a href="contact.html">Search Jobs</a>
		                </div> -->
	            	</div>
	            	<div class="col-sm" style="text-align: left; margin-left: 150px">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 style="font-size: 50px;">Register <em>Now</em></h2>
	            		<form action="{{ route('register') }}" method="post">
                            @csrf
                            <input type="text" value="{{ old('name') }}" name="name" placeholder="Full Name" style="padding: 9px 10px; width: 400px; margin-bottom: 5px;" />
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email Address" style="padding: 9px 10px; width: 400px; margin-bottom: 5px;" />
                            <input type="password" name="password" placeholder="Password" style="padding: 9px 10px; width: 400px; margin-bottom: 5px;" />
                            <div class="main-button" style="margin-top: 10px;">
                                <button style="border: none;" class="register-button" type="submit">Register</button>
                            </div>
                        </form>
	            	</div>
            	</div>
            </div>
        
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>News</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-1-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-2-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-3-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-1-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-2-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-3-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>70 000 </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="jobs.html">View Jobs</a>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 <a href="">Qatar Jobs.Online</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>