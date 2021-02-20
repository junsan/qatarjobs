@extends('layout.master')

@section('meta')
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Qatar Jobs Online" />
    <meta property="og:description" content="Latest Qatar News and Jobs." />
    <meta property="og:image" content="http://qatarjobs.online/classifieds/gulftime.jpg" />
    <meta property="og:url" content="http://qatarjobs.online/" />
@stop

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(http://qatarjobs.online/assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Qatar <em>Classifieds</em></h2>
                        <p>Find all the latest Jobs in Qatar here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** News Start ***** -->
    <section class="section" id="our-classes">
    <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8"> 
                    <section class='tabs-content'>
                    <article>
                        <h3>Classified: {{ $classified->title }}</h3>
                        <p><i class="fa fa-user"></i> Gulf Times &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $classified->created_at }}&nbsp;</p>
                        <image src="{{ asset('classifieds/gulftime.jpg') }}" />
                        @foreach ($classified_images as $classified_image) 
                            <image src="{{ asset('classifieds/'.$classified_image->file_name) }}" />
                        @endforeach

                    </article>
                    </section>

                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-lg-4">
                    <!-- <h5 class="h5">Search</h5>
                    
                     <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                          <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                        </form>
                    </div> -->
        
                    <br>
                    <h5 class="h5">Recent Job Post</h5>

                    <ul>
                        @foreach ($jobs as $job) 
                            <li>
                                <p><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></p>
                                <small><i class="fa fa-user"></i> {{ $job->company->name }}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $job->created_at }}</small>
                            </li>

                            <li><hr></li>
                        @endforeach
                    </ul>
                    <br><br>
                    @include('layout.news') 
                    <br><br>
                    @include('layout.events')
                </div>
            </div>
        </div>
    </section>
    <!-- ***** News End ***** -->
@stop