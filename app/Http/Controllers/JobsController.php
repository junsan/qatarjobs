<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use App\Models\Event;
use App\Models\Company;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        
        return view('jobs', compact('news', 'jobs', 'events'));
    }

    public function admin_index()
    {
        $companies = Company::orderBy('id', 'desc')->get();

        return view('admin.jobs')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobs = new Job();
        $jobs->title= $request['title'];
        $jobs->company_id= $request['company_id'];
        $jobs->description = $request['description'];
        $jobs->requirements= $request['requirements'];
        $jobs->source_url= $request['source_url'];
        $jobs->save(); 

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        $jobs = Job::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        $news = News::orderBy('id', 'desc')->limit(5)->get();

        return view('jobs-show', compact('job', 'news', 'jobs', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
