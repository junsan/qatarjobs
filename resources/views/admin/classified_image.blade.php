@extends('layout.master')

@section('content')
    <section class="section section-bg" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Add <em>Classifieds</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section">
        <div class="container">
            <div class="row">
                <form action="{{ route('classified_image.store') }}" method="post" enctype="multipart/form-data" style="width: 100%;">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your file.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="source_id" class="form-label">Classified</label>
                        <select class="form-select" name="classified_id">
                            <option selected>Open this select menu</option>
                            @foreach($classifieds as $classified)
                                <option value="{{ $classified->id }}">{{ $classified->title }}</option>
                            @endforeach
                        </select>
                        &nbsp; Image Upload <input type="file" name="upload[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop