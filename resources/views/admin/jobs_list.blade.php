@extends('layout.master')

@section('content')
    <section class="section section-bg" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Jobs <em>List</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="section">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)  
                            <tr>
                                <td><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">{{ $job->title }}</a></td>
                                <td>{{ $job->company->name }}</td>
                                <td>{{ $job->category['name'] }}</td>
                                <td><a href="{{ route('jobs.edit', $job->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <br>
                <span style="float: right">{{ $jobs->links("pagination::bootstrap-4")}}</span>
                <br>
                <br>
            </div>
        </div>
    </section>
@stop