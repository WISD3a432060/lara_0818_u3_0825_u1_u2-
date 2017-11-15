<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,20)as$number){
            Post::truncate();            
            Post::create([
            $faker=Faker::create('zh_TW');
            'title'=>$faker‐>sentence,
            'content'=>$faker‐>paragraph,
            'is_feature'=>rand(0,1),
            'created_at'=>Carbon::now()‐>subDays($total‐$number),
            'updated_at'=>Carbon::now()‐>subDays($total‐$number),
            ]);
            }            
    }
    $total=20;
    
}
