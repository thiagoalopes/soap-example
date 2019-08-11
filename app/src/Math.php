<?php

namespace app\src;

class Math {

    public function somar(...$valores){
        
        $resultado = 0;

        foreach ($valores as $valor) {
            $resultado += $valor;
        }
        return $resultado;
    }

}