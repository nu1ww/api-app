<?php
/**
 * Created by PhpStorm.
 * User: Nu1
 * Date: 3/13/2017
 * Time: 10:33 AM
 */

namespace App\Acme\Transformers;


class TagTransformer extends Transformer
{
    public function transform($tags)
    {

        return ['name' => $tags['name']];
    }
}