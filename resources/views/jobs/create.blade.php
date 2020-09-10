@extends('layouts.app')
    <div class="container-fluid marginTop faint-bg pt-2">
        <div class="container">
            <div class="row">
                    
                <div class="col-md-8 col-md-offset-2 ">
                    <h2 class="title-font" style="padding-left:0px">Create a Job Post</h2>
                    <p class="fontColorfaint ">
                        Your job listing will remain on this site for 30 days. After 30 days your job listing will expire and be removed. You can always post the job again for free.
                    </p>
                    
                </div>
                
                
            </div>
        </div>
       
    </div>
    <div class="container-fluid " style="background:white">
        <div class="container ">
            <div class="row pt-5">
                <div class="col-md-8 col-md-offset-2">
                
                    <form method='post' action="{{route('jobs.store')}}">
                        @csrf 
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Job">
                            
                        </div>
                        <div class="form-group">
                            <label for="salary">Job Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                            
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control"  name="location" id="location"  placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label >Category</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="fulltime" value="Full Time" checked>
                                <label class="form-check-label" for="fulltime">
                                Full Time
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="remote" value="Remote" checked>
                                <label class="form-check-label" for="remote">
                                Remote
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="part-time" value="Part Time" checked>
                                <label class="form-check-label" for="part-time">
                                Part Time
                                </label>
                            </div>
                            
                        </div>
                        
                        <div class="form-group form-trix">
                            <label for="jobTitle">Description</label>
                            @trix(\App\Job::class, 'description')
                        </div>
                        <div class="form-group form-trix">
                            <label for="jobTitle">Requirements</label>
                            @trix(\App\Job::class, 'requirement')
                        </div>
                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName"  placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="companyWebsite">Company Website</label>
                            <input type="text" class="form-control"  name="companyWebsite" id="companyWebsite"  placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label for="companyPhone">Company Phone</label>
                            <input type="text" class="form-control" id="companyPhone" name="companyPhone"  placeholder="Enter Phone No">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your phone no with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="companyEmail">Company Email</label>
                            <input type="text" class="form-control"  id="companyEmail" name="companyEmail"  placeholder="Enter email">
                            
                        </div>
                        <button type="submit" style="background:#FF2D20" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('content')