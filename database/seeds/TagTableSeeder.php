<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        $faker = \Faker\Factory::create();
        foreach ((range(1,30))as $index){
            Tag::create([
                'name'=>$faker->word,

            ]);
        }
    }
}
