<h5 class="h5">Recent News</h5>
<br>
<ul>
    @foreach ($news as $new) 
        <li>
            <div class="row">
                <div class="col-lg-5">
                <a href="{{ route('news.show', [$new->id, $new->slug]) }}"><img class="img-fluid" style="margin-bottom: 10px" src="{{ $new->image_url }}" /></a>
                </div>
                <div class="col-lg-7">
                    <p><a class="larger_text" href="{{ route('news.show', [$new->id, $new->slug]) }}">{{ $new->title }}</a></p>
                    <small><i class="fa fa-user"></i> {{ $new->source->name }}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $new->created_at }}</small>
                </div>
            </div>
        </li>

        <li><br></li>
    @endforeach
</ul> 