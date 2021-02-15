@extends('layout.master')

@section('content')
    <section class="section section-bg" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Add <em>Jobs</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section">
        <div class="container">
            <div class="row">
                <form action="{{ route('jobs.store') }}" method="post" style="width: 100%;">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <select class="form-select" name="company_id">
                            <option selected>Open this select menu</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Description</label>
                        <textarea id="summernote" class="form-control" name="description" rows="9"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Requirements</label>
                        <textarea id="requirements" class="form-control" name="requirements" rows="9"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="source_url" class="form-label">Source</label>
                        <input type="text" class="form-control" name="source_url">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop