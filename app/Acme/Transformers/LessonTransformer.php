<?php

namespace App\Acme\Transformers;

class LessonTransformer extends Transformer
{
//transfomation  test
    public function transform($lesson)
    {

        return ['title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean) $lesson['some_bool']];
    }

}