@extends('layout.master')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(http://qatarjobs.online/assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Qatar <em>Events</em></h2>
                        <p>Find all the latest Qatar news and events here.</p>
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
                        <h3>{{ $event->title }}</h3>

                        <p><i class="fa fa-user"></i> {{ $event->source->name }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $event->created_at }} &nbsp;</p>

                        <div><img src="{{ $event->image_url }}" alt=""></div>

                        <br>
                        <br>
                        {!! $event->content !!}
                        <br>
                        <br>
                        <br>
                        <ul class="social-icons">
                            <li>Source:</li>
                            <li><a target="_blank" href="{{ $event->source_url }}">{{ $event->source_url }}</a></li>
                        </ul>
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
                    @include('layout.events')
                    <br><br>
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
                </div>
            </div>
        </div>
    </section>
    <!-- ***** News End ***** -->
@stop