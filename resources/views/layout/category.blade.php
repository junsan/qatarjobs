<h5 class="h5">Job Category</h5>
<ul>
    @foreach ($categories as $category) 
        <li>
            <a href="{{ route('jobs.index', [$category->slug, $category->id]) }}">{{ $category->name }}</a>
        </li>
    @endforeach
</ul>
<br><br>