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
		                <h2 class="d-none d-sm-block" style="font-size: 50px;">Find the perfect <em>Job</em></h2>
		                <form id="search_form" name="gs" method="GET" action="{{ route('jobs.index') }}">
                            <div class="main-button">
                                <input type="text" name="query" style="padding: 9px 10px; margin-bottom: 5px;" />
                                <button type="submit" style="border: none;" class="register-button" id="button-addon2">Search Jobs</button>
                            </div>
                        </form>
                        <br><br>
	            	</div>
	            	<div class="index-form col-sm" style="text-align: left;">
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
                        <h2 class="d-none d-sm-block" style="font-size: 50px;">Register <em>Now</em></h2>
	            		<form action="{{ route('register') }}" method="post">
                            @csrf
                            <input type="text" value="{{ old('name') }}" name="name" placeholder="Full Name" style="padding: 9px 10px; margin-bottom: 5px;" />
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email Address" style="padding: 9px 10px;  margin-bottom: 5px;" />
                            <input type="password" name="password" placeholder="Password" style="padding: 9px 10px;  margin-bottom: 5px;" />
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
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($news as $new)
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="{{ $new->image_url }}" alt="">
                            </div>
                            <div class="down-content">
                                <span></span>

                                <h4><a href="{{ route('news.show', [$new->id, $new->slug]) }}">{{ $new->title }}</a></h4>

                                <p>{{ $new->source->name }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach

                
            </div>
            <br><br>
            <div class="main-button text-center">
                <a href="{{ route('news.index') }}">View more</a>
            </div>
            <br>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Contact us for the latest Qatar jobs and Qatar news.</p>
                        <div class="main-button">
                            <a href="mailto:info.qatarjobs.online@gmail.com">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Latest <em>Jobs</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Position</th>
                            <th scope="col">Company</th>
                            <th scope="col">Category</th>
                            <th scope="col" class="d-none d-sm-block" style="text-align: right;">Logo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)  
                                <tr>
                                    <td><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></td>
                                    <td>{{ $job->company->name }}</td>
                                    <td>{{ $job->category['name'] }}</td>
                                    <td class="d-none d-sm-block"><img style="float: right; height: 30px" src="{{ $job->company->logo }}" /></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="main-button text-center">
                <a href="{{ route('jobs.index') }}">View more</a>
            </div>
            <br><br>
        </div>
    </section>
@stop