<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$faker = Faker\Factory::create();
    	
    	for ($i=0;$i<=10;$i++){
    		DB::table('users')->insert([
    			'name'=>$faker->name,
                'username'=>$faker->username,
    			'email'=>$faker->email                   ,
                'name'=>$faker->userName,
                'about'=>$faker->realText(),
                'password'=>$faker->password,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
                'remember_token'=>$faker->numberBetween(1,0),
                ]);

    	}
    }
}
