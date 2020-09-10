<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;
use App\Http\Requests\JobValidatePost;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::all();
        return view('jobs.index')->with('jobs',$jobs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobValidatePost $request)
    {
       $validated=$request->validated();
        $requestTrixData=request('job-trixFields');
       Job::create([
        'full_description' =>  $requestTrixData['description'],
        'requirement'=>$requestTrixData['requirement'],
        'user_id'=>'1',
        'views'=>'0',
        'title'=>request('title'),
        'salary'=>request('salary'),
        'title'=>request('title'),
        'category'=>request('category'),
        'location'=>request('location'),
        'companyName'=>request('companyName'),
        'companyWebsite'=>request('companyWebsite'),
        'companyEmail'=>request('companyEmail'),
        'companyPhone'=>request('companyPhone'),

    ]);
    
    return redirect('jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $job=Job::where('job_id',$id)->first();
        
        $viewed=Session::get('view_job',[]);
       
        if(!in_array($job->job_id,$viewed)){
            $job->where('job_id',$id)->increment('views');   
            Session::push('view_job',$job->job_id);
            
        }
        return view('jobs.show')->with('job',$job);
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
