@extends('layout.master')

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
                                    <th scope="col"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classifieds as $classified)  
                                        <tr>
                                            <td>Classified:</td>
                                            <td><a href="{{ route('classifieds.show', [$classified->id, $classified->slug]) }}">{{ $classified->title }}</a></td>
                                            <td><a href="{{ route('classifieds.show', [$classified->id, $classified->slug]) }}">Click here to view</a></td>
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

                @include('layout.news')              
                <hr>
                @include('layout.events')    
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@stop