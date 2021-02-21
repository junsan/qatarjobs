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
                <form action="{{ $job->id == null ? route('jobs.store') :  route('jobs.update', $job->id) }}" method="post" style="width: 100%;">
                    @csrf

                    @isset($job->id)
                        {{ method_field('PUT')}}
                    @endisset
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="{{old('title', $job->title)}}" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            <option selected>Open this select menu</option>
                            @foreach($categories as $category)
                                @if (old('category_id', $job->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <select class="form-select" name="company_id">
                            <option selected>Open this select menu</option>
                            @foreach($companies as $company)
                                @if (old('company_id', $job->company_id) == $company->id)
                                    <option value="{{ $company->id }}" selected>{{ $company->name }}</option>  
                                @else
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Description</label>
                        <textarea id="summernote" class="form-control" name="description" rows="9">{{old('description', $job->description)}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Requirements</label>
                        <textarea id="requirements" class="form-control" name="requirements" rows="9">{{old('requirements', $job->requirements)}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="source_url" class="form-label">Source</label>
                        <input type="text" class="form-control" name="source_url" value="{{old('source_url', $job->source_url)}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@stop