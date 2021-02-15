@extends('layout.master')

@section('content')
    <section class="section section-bg" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Add <em>Company</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section">
        <div class="container">
            <div class="row">
                <form action="{{ route('company.store') }}" method="post" style="width: 100%;">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Logo</label>
                        <input type="text" class="form-control" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Description</label>
                        <textarea id="summernote" class="form-control" name="description" rows="9"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop