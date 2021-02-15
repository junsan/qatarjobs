@extends('layout.master')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(http://localhost/qatarjobs/public/assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Qatar <em>News</em></h2>
                        <p>Find all the latest Qatar News here.</p>
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
                <h4>{{ $news->title }}</h4>

                <p><i class="fa fa-user"></i> {{ $news->source->name }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $news->created_at }} &nbsp;</p>

                <div><img src="{{ $news->image_url }}" alt=""></div>

                <br>
                <br>
                {!! $news->content !!}
                <br>
                <br>
                <br>
                <ul class="social-icons">
                    <li>Source:</li>
                    <li><a target="_blank" href="{{ $news->source_url }}">{{ $news->source_url }}</a></li>
                </ul>
              </article>
            </section>

            <br>
            <br>
            <br>
        </div>
    </section>
    <!-- ***** News End ***** -->
@stop