<?php

namespace App;

use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    protected $guarded=[];
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }

    protected static function allPosts()
    {
        return app(Pipeline::class)->send(Post::query())->through([Active::class,Sort::class,MaxCount::class])->thenReturn()->paginate(10);

    }
}
