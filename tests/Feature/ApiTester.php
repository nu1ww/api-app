<?php
/**
 * Created by PhpStorm.
 * User: Nu1
 * Date: 3/13/2017
 * Time: 12:37 PM
 */

namespace Tests\Feature;


use Tests\TestCase;
use Faker\Factory as faker;

class ApiTester extends TestCase
{
    protected $fake;
    protected $times=1;

    /**
     * ApiTester constructor.
     * @param $fake
     */
    public function __construct()
    {
        $this->fake = Faker::create();
    }

    public function times($time){
        $this->times=$time;
        return $this;
    }


}