<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salaray'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,foreignPivotKey:'job_listing_id');
    }
}