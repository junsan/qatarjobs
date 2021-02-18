<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use App\Models\Event;
use App\Models\Classified;
use Illuminate\Http\Request;
use App\Models\ClassifiedImage;

class ClassifiedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::orderBy('id', 'desc')->get();
        $jobs = Job::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        
        return view('classified', compact('classifieds', 'news', 'jobs', 'events'));
    }

    public function admin_index()
    {

        return view('admin.classified');
    }

    public function classified_image() {

        $classifieds = Classified::orderBy('id', 'desc')->get();

        return view('admin.classified_image', compact('classifieds'));
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
        $classified = new Classified();
        $classified->title = $request['title'];
        $classified->save(); 

        return back();
    }

    public function classified_image_store(Request $request) {
        
        $request->validate([
            'upload.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('upload')) {
            $imageNameArr = [];
            foreach ($request->upload as $file) {
                
                $imageName = time().'-'.$file->getClientOriginalName();
                $imageNameArr[] = $imageName;
                // Upload file to public path in images directory
                $file->move(public_path('classifieds'), $imageName);
                
                $classified = new ClassifiedImage();
                $classified->classified_id = $request['classified_id'];
                $classified->file_name = $imageName;
                $classified->save();
            }
        }

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
        $classified_images = ClassifiedImage::where('classified_id', $id)->get();
        $classified = Classified::find($id);
   
        $jobs = Job::orderBy('id', 'desc')->limit(5)->get();
        $events = Event::orderBy('id', 'desc')->limit(5)->get();
        $news = News::orderBy('id', 'desc')->limit(5)->get();
        
        return view('classified-show', compact('classified', 'classified_images', 'news', 'jobs', 'events'));
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
