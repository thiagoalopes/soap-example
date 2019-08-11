<?php

namespace app\controller;

use app\model\Estados;
use app\src\ServerSoap;

class EstadosController extends Controller {

    protected $estados;

    public function listar(){

        $this->estados = new Estados;
        ServerSoap::createServer($this->estados, $this->options);
    
    }
}