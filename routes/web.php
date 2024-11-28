<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/projects', function() {
    $projects = Project::all();
    $projects = array_map(function ($project) {
        $project['date'] = new DateTime($project['date']);
        return $project;
    }, $projects);
    return view('projects', ['projects'=>$projects]);
});
Route::get('/{id}/project', function($id) {
    $project = Project::find($id);
    return view('project', ['project'=>$project]);
});