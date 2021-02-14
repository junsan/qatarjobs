@extends('layout.master')

@section('content')
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Add <em>News</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section">
        <div class="container">
            <div class="row">
                <form action="{{ route('store_news') }}" method="post" style="width: 100%;">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="source_id" class="form-label">Source</label>
                        <select class="form-select" name="source_id">
                            <option selected>Open this select menu</option>
                            @foreach($news as $new)
                                <option value="{{ $new->id }}">{{ $new->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image Url</label>
                        <input type="text" class="form-control" name="image_url">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" name="content" rows="9"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="source_url" class="form-label">Source Url</label>
                        <input type="text" class="form-control" name="source_url">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop