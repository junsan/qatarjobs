@extends('layout.master')

@section('content')
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
@stop