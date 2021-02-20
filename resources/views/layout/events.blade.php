<h5 class="h5">Recent Events</h5>
<br>
<ul>
    @foreach ($events as $event) 
        <li>
            <div class="row">
                <div class="col-lg-5">
                <a href="{{ route('events.show', [$event->id, $event->slug]) }}"><img class="img-fluid" style="margin-bottom: 10px" src="{{ $event->image_url }}" /></a>
                </div>
                <div class="col-lg-7">
                    <p><a class="larger_text" href="{{ route('events.show', [$event->id, $event->slug]) }}">{{ $event->title }}</a></p>
                    <small><i class="fa fa-user"></i> {{ $event->source->name }}&nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{ $event->created_at }}</small>
                </div>
            </div>
        </li>

        <li><br></li>
    @endforeach
</ul>