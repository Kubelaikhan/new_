<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body']; yang ini yang boleh diisi.
    protected $guarded =['id'];
    protected $with = ['author', 'category', 'author'];

    public function scopeFilter($query, array $filters){
        // null coaliscing
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like','%'. $search. '%')
                        ->orWhere('body', 'like', '%'. $search .'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                return $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) => 
                $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );

        // $query->when($filters['author'] ?? false, function($query, $author){
        //     return $query->whereHas('author', function($query) use ($author){
        //         return $query->whereHas('username', $author);
        //     });
        // });

    }

    public function category(){

        return $this->belongsTo(Category::class);
        
    }

    public function author(){

        return $this->belongsTo(User::class, 'user_id');
        
    }

}
