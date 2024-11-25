<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/projects', function(){
    $projects = [
        [
            'id'=>'1',
            'name'=>'NetMonitor',
            'date' =>'2024/10/10',
            'language' => 'Python',
            'fremwork' => []
        ],
        [
            'id'=>'2',
            'name'=>'SRTMagic',
            'date' =>'2024/10/25',
            'language' => 'Javascript',
            'fremwork' => ['react', 'expressJS-nodeJs']
        ],
        [
            'id'=>'3',
            'name'=>'typefixer',
            'date' =>'2024/11/10',
            'language' => 'JavaSript',
            'fremwork' => ['expressJS-nodeJs']
        ],
        ];
        $projects = array_map(function ($project) {
            $project['date'] = new DateTime($project['date']);
            return $project;
        }, $projects);
    return view('projects', ['projects'=>$projects]);
});
Route::get('/{id}/project', function($id) {
    $projects = [
        [
            'id'=>'1',
            'name'=>'NetMonitor',
            'date' =>'2024/10/10',
            'language' => 'Python',
            'fremwork' => []
        ],
        [
            'id'=>'2',
            'name'=>'SRTMagic',
            'date' =>'2024/10/25',
            'language' => 'Javascript',
            'fremwork' => ['react', 'expressJS-nodeJs']
        ],
        [
            'id'=>'3',
            'name'=>'typefixer',
            'date' =>'2024/11/10',
            'language' => 'JavaSript',
            'fremwork' => ['expressJS-nodeJs']
        ],
        ];
        $project = Arr::first($projects, fn($project)=>$project['id'] == $id);
        $project['date'] = new DateTime($project['date']);
    return view('project', ['project'=>$project]);
});