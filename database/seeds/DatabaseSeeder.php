<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{


    private $tables=['lessons','tags','lesson_tag'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->tableClean();
        //Eloquent::ungard();

        $this->call(LessonTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(LessonTagTableSeeder::class);
    }

    public function tableClean(){

       // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table){
            DB::table($table)->truncate();
        }
      //  DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
