<?php

namespace App\Http\Controllers;

use App\Acme\Transformers\TagTransformer;
use App\Lesson;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends ApiController
{
    //
    protected $tagsTransformer;

    /**
     * TagsController constructor.
     * @param $tagsTransformer
     */
    public function __construct(TagTransformer $tagsTransformer)
    {
        $this->tagsTransformer = $tagsTransformer;
    }

    public function index($id=null){

        $tags= $this->getTags($id);
        return $this->respond([
            'data'=>$this->tagsTransformer->transformCollection($tags->toArray())
            ]);
    }

    public function getTags($id)
    {
      return $tags=$id ? Lesson::find($id)->tags : Tag::all();
    }
}
