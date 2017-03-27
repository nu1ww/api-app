<?php
namespace App\Acme\Transformers;
/**
 * Created by PhpStorm.
 * User: Nu1
 * Date: 3/11/2017
 * Time: 1:13 PM
 */
abstract class Transformer
{
    public function transformCollection(array $item)
    {
        return array_map([$this, 'transform'], $item);
    }

    public abstract function transform($item);

}