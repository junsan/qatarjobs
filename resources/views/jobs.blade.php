@extends('layout.master')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(http://qatarjobs.online/assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Qatar <em>Jobs</em></h2>
                        <p>Find all the latest Jobs in Qatar here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Company</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)  
                                        <tr>
                                            <td><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></td>
                                            <td>{{ $job->company->name }}</td>
                                            <td><img src="{{ $job->company->logo }}" /></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>
                </div>
            </div> 

            <br>
            <div class="col-lg-4">
                <!-- <h5 class="h5">Search</h5>
                    
                     <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                          <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                        </form>
                    </div> -->

                    

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
                <hr>
                <h5 class="h5">Recent Events</h5>
                <br>
                <ul>
                    @foreach ($events as $event) 
                        <li>
                            <div class="row">
                                <div class="col-lg-4">
                                <a href="{{ route('events.show', [$event->id, $event->slug]) }}"><img src="{{ $event->image_url }}" height="75" /></a>
                                </div>
                                <div class="col-lg-8">
                                    <p><a href="{{ route('events.show', [$event->id, $event->slug]) }}">{{ $event->title }}</a></p>
                                    <small><i class="fa fa-user"></i> {{ $event->source->name }}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $event->created_at }}</small>
                                </div>
                            </div>
                        </li>

                        <li><br></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@stop