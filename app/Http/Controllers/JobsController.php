<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use App\Models\Event;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category = null, $id = null)
    {
        $search = null;
        if ($request->has('query') && !is_null($request['query'])){
            $search = $request['query'];
            $jobs = Job::orderBy('id', 'desc')->where('title', 'LIKE', "%$search%")->orWhereHas('company', 
                    function($query) use($search) {
                        $query->where('name', 'LIKE', "%$search%");
                    })->paginate(40);  
        } else if (!is_null($id)) {
            $jobs = Job::orderBy('id', 'desc')->where('category_id', $id)->paginate(40);
        } else {
            $jobs = Job::orderBy('id', 'desc')->paginate(40);
        }    
        
        $news = News::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        $categories = Category::orderBy('id', 'asc')->get();
        
        return view('jobs', compact('news', 'jobs', 'events', 'search', 'categories'));
    }

    public function admin_index()
    {
        $companies = Company::orderBy('id', 'desc')->get();
        $categories = Category::orderBy('id', 'desc')->get();
        $job = new Job;

        return view('admin.jobs', compact('companies', 'categories', 'job'));
    }

    public function jobs_list() {

        $jobs = Job::orderBy('id', 'desc')->limit(20)->paginate(40);
        return view('admin.jobs_list')->with('jobs', $jobs);
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
        $categories = Category::orderBy('id', 'asc')->get();

        return view('jobs-show', compact('job', 'news', 'jobs', 'events', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::orderBy('id', 'desc')->get();
        $categories = Category::orderBy('id', 'desc')->get();
        $job = Job::find($id);

        return view('admin.jobs', compact('companies', 'categories', 'job'));
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
        $jobs = Job::find($id);
        $jobs->title= $request['title'];
        $jobs->category_id= $request['category_id'];
        $jobs->company_id= $request['company_id'];
        $jobs->description = $request['description'];
        $jobs->requirements= $request['requirements'];
        $jobs->source_url= $request['source_url'];

        $jobs->save(); 

        return back();
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
