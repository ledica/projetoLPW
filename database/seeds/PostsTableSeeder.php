<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	/*DB::table('posts')->insert([
    		'title'=>'Hello World Post!',
    		'is_private'=>false,
    		'content'=>'Primeiro Post do Blog!',
    		'tag'=>'tests']);
		*/
    	$faker = Faker\Factory::create();
    	
    	for ($i=0;$i<=50;$i++){
    		DB::table('posts')->insert([
    			'title'=>$faker->sentence(4,true),
    			'is_private'=>$faker->numberBetween(0,1),
    			'content'=>$faker->realText(),
    			'tag'=>$faker->word,
    			'created_at'=>date("Y-m-d H:i:s"),
    			'updated_at'=>date("Y-m-d H:i:s"),
				'user_id'=>$faker->numberBetween(1,10),
    			]);

    	}
    }
}
