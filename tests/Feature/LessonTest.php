<?php

namespace Tests\Feature;

use App\Lesson;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LessonTest extends ApiTester
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_featches_lessons()
    {

        $this->makeLesson();

        echo 'ssssssssssss';

        dd($this->getJson('api/v1/lessons'));
        $this->assertTrue(true);
    }

    public function test_it_featches_a_single_lessons()
    {

        $this->makeLesson();

        ($this->getJson('api/v1/lessons/1'));

    }


    public function makeLesson($lessonFeilsd = [])
    {
        $lesson = array_merge([
            'titsdcsle' => $this->fake->sentences,
            'body' => $this->fake->paragraphs,
            'some_bool' => $this->fake->boolean
        ], $lessonFeilsd);

       while ($this->time--) Lesson::create($lesson);

    }


}
