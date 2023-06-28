<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCourses extends Model
{
    use HasFactory;

    protected $fillable=['title','tags','url','description','author_id','author'];

    public function scopeFilter($query, array $filters)
    {
        // if ($filters['tag'] ?? false) {
        //     $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        // }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%');
            // ->orWhere('description', 'like', '%' . $filters['search'] . '%');
        }

    }

}
