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
                <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Location</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)  
                                        <tr>
                                            <td><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></td>
                                            <td>{{ $job->company->name }}</td>
                                            <td>Qatar</td>
                                            <td><img src="{{ $job->company->logo }}" /></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>
                </div>
            </div> 

            <br>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@stop