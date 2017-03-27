<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\Lesson;
class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        foreach ((range(1,30))as $index){
           Lesson::create([
                'title'=>$faker->sentence(1),
                'body'=>$faker->paragraph(4),
                'some_bool'=>$faker->boolean(),
               ]);
        }
    }
}
