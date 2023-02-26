<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // public function scopeFilter($query)
    public function scopeFilter($query, array $filters)
    {
        // if(request('search')){
        //     return $query->where('title', 'like', '%'. request('search') .'%')
        //           ->orWhere('body', 'like', '%'. request('search') .'%');
        // }
        
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%'. $filters['search'] .'%')
        //           ->orWhere('body', 'like', '%'. $filters['search'] .'%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $filterSearch) {
            return $query->where('title', 'like', '%'. $filterSearch .'%')
                  ->orWhere('body', 'like', '%'. $filterSearch .'%');
        });
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
