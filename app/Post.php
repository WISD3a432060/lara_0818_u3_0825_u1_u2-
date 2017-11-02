<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=[
        'title',
        'content',
        'is_feature'
        ];
        useApp\Comment;
        public function comments()
        {
        return $this‐>hasMany(Comment::class);
        }
        $post=\App\Post::find(1);
        foreach ($post‐>commentsas$comment)
        {
        echo $comment‐>content.'<br>';
        }
        
}

    