@extends('layout.master')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>QATAR <em>NEWS</em></h2>
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

                      @foreach ($news as $new)    
                        <article>
                            <img src="{{ $new->image_url }}" alt="">
                            <h4><a href="{{ route('news.show', [$new->id, $new->slug]) }}">{{ $new->title }}</a></h4>

                            <p><i class="fa fa-user"></i> {{ $new->source->name }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $new->created_at }} &nbsp;
                            
                            <br><br>

                            {!! substr(strip_tags($new->content), 0, 200)  !!}...

                            <div class="main-button">
                                <a href="{{ route('news.show', [$new->id, $new->slug]) }}">Continue Reading</a>
                            </div>
                        </article>
                        <br>
                        <br>
                      @endforeach

                      <span style="float: right">{{ $news->links("pagination::bootstrap-4")}}</span>
                      
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
                    @include('layout.events')
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
@stop