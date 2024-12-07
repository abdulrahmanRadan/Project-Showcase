<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Models\Project;



Route::get('/', function () {
    return view('home');
});

Route::get('/{id}/job', function ($id) {
    $job = Job::find($id);
    return view('job', ['job'=>$job]);
});

Route::get('/jobs', function(){
    $jobs = Job::with('employer')->get();
    return view('jobs', ['jobs' =>$jobs]);
});

Route::get('/projects', function() {
    $projects = Project::all();
    return view('projects', ['projects'=>$projects]);
});

Route::get('/{id}/project', function($id) {
    $project = Project::find($id);
    return view('project', ['project'=>$project]);
});