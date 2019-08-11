<?php

namespace app\controller;

use app\src\Math;
use app\src\ServerSoap;

class MathController extends Controller {

    protected $math;

    public function somar(){

        $this->math = new Math;
        ServerSoap::createServer($this->math, $this->options);
    }
   
}