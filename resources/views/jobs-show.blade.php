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

    <!-- ***** News Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <section class='tabs-content'>
              <article>
                <img src="{{ $job->company->logo }}" alt="" style="float: right" >
                <h3>{{ $job->title }}</h3>

                <p><i class="fa fa-user"></i> {{ $job->company->name }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $job->created_at }} &nbsp;</p>
                
                <br>
                <h5>Description:</h5>
                <br>
                {!! $job->description !!}
                <h5>Requirements:</h5>
                <br>
                {!! $job->requirements !!}
                <br>
                <br>
                <br>
                <div class="main-button">
                    <a target="_blank" href="{{ $job->source_url }}">Apply</a>
                </div>
              </article>
            </section>

            <br>
            <br>
            <br>
        </div>
    </section>
    <!-- ***** News End ***** -->
@stop