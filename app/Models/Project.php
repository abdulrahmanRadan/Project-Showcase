<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model {
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'status'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}