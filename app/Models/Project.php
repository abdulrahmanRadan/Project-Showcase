<?php 

namespace App\Models;
use Illuminate\Support\Arr;
use \DateTime;

class Project {
    public static function all() : array 
    {
        return [
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
    }

    public static function find(int $id) :array
    {
        $project = Arr::first(static::all(), fn($project)=>$project['id'] == $id);
        if(!$project){
            abort(404);
        }
        $project['date'] = new DateTime($project['date']);
        return $project;
    }

}