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

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn ($query, $author) => 
            $query->whereHas('author', fn ($query) => 
                $query->where('username', $author)
            )
        );
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
