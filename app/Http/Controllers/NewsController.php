<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use App\Models\Event;
use App\Models\Source;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        $jobs = Job::orderBy('id', 'desc')->limit(8)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();

        return view('news', compact('news', 'jobs', 'events'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
        $sources = Source::orderBy('name')->get();

        return view('admin.news')->with('sources', $sources);
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
        $new = new News();
        $new->title= $request['title'];
        $new->source_id= $request['source_id'];
        $new->content = $request['content'];
        $new->image_url= $request['image_url'];
        $new->source_url= $request['source_url'];
        $new->save(); 

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
        $new = News::find($id);
        $jobs = Job::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        $news = News::orderBy('id', 'desc')->limit(5)->get();

        return view('news-show', compact('new', 'news', 'jobs', 'events'));
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
