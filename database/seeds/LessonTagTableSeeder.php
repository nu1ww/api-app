<?php

use Illuminate\Database\Seeder;

class LessonTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        $faker = \Faker\Factory::create();
        $lessonIds=\App\Lesson::pluck('id')->toArray();
        $tadIds=\App\Tag::pluck('id')->toArray();

        foreach ((range(1,30))as $index){

            DB::table('lesson_tag')->insert([
                'lesson_id'=> $faker->randomElement($lessonIds),
                'tag_id'=> $faker->randomElement($tadIds),
            ]);

        }
    }
}
