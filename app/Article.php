<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','body','source'
        ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'articles_to_categories');
    }

    public function hasCategory($id)
    {
        return in_array($id, $this->categories()->pluck('id')->toArray());
    }
}
