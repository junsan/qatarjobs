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
                            <h5 class="h5">Search Job</h5>      
                            <div class="contact-form">
                                <form id="search_form" name="gs" method="GET" action="{{ route('jobs.index') }}">
                                    <div class="input-group mb-3">
                                        <input value="{{ $search }}" aria-describedby="button-addon2" style="padding: 25px 10px; font-size: 20px;" type="text" name="query" class="searchText form-control" placeholder="type to search..." autocomplete="on">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Company</th>
                                    <th scope="col" class="d-none d-sm-block"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)  
                                        <tr>
                                            <td><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></td>
                                            <td>{{ $job->company->name }}</td>
                                            <td class="d-none d-sm-block"><img style="float: right; height: 30px" src="{{ $job->company->logo }}" /></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <span style="float: right">{{ $jobs->links("pagination::bootstrap-4")}}</span>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                      </div>
                </div>
            </div> 

            <br>
            <div class="col-lg-4">
                
                @include('layout.category')
                              
                <hr> 

                @include('layout.news')
                              
                <hr>

                @include('layout.events')

            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@stop