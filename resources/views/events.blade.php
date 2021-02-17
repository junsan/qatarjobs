@extends('layout.master')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
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

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>

                      @foreach ($events as $event)    
                        <article>
                            <img src="{{ $event->image_url }}" alt="">
                            <h4><a href="{{ route('events.show', [$event->id, $event->slug]) }}">{{ $event->title }}</a></h4>

                            <p><i class="fa fa-user"></i> {{ $event->source->name }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $event->created_at }} &nbsp;
                            
                            <br><br>

                            {!! substr(strip_tags($event->content), 0, 200)  !!}...

                            <div class="main-button">
                                <a href="{{ route('events.show', [$event->id, $event->slug]) }}">Continue Reading</a>
                            </div>
                        </article>
                        <br>
                        <br>
                      @endforeach

                      <span style="float: right">{{ $events->links("pagination::bootstrap-4")}}</span>
                      
                    </section>

                </div>

                <div class="col-lg-4">
                    <!-- <h5 class="h5">Search</h5>
                    
                     <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                          <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                        </form>
                    </div> -->

                    

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
                    <br>
                    <h5 class="h5">Recent News</h5>
                    <br>
                    <ul>
                        @foreach ($news as $new) 
                            <li>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <a href="{{ route('news.show', [$new->id, $new->slug]) }}"><img src="{{ $new->image_url }}" height="75" /></a>
                                    </div>
                                    <div class="col-lg-8">
                                        <p><a href="{{ route('news.show', [$new->id, $new->slug]) }}">{{ $new->title }}</a></p>
                                        <small><i class="fa fa-user"></i> {{ $new->source->name }}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $new->created_at }}</small>
                                    </div>
                                </div>
                            </li>

                            <li><br></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
@stop