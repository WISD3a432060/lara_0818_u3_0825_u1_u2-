<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table-> increments('id');
            $table-> timestamps();
            $table-> string('title');
            $table-> text('content');
            $table -> string('title',500)-> change();
            $table -> boolean('is_feature')-> default(false)-> after('content');
            $post=new\App\Post();
            $post‐>title='testtitle';
            $post‐>content='testcontent';
            $post‐>save(); 

            $posts=\App\Post::all();
            dd($posts);
            $post=\App\Post::find(1);
            dd($post);  
            $posts=\App\Post::where('id','<',10)‐>orderBy('id','DESC')‐>get();
            dd($posts);

            $post=\App\Post::find(1);
            $post‐>update([
            'title'=>'updatedtitle',
            'content'=>'updatedcontent',
            ]);

            $post=\App\Post::find(1);
            $post‐>delete();
            
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
