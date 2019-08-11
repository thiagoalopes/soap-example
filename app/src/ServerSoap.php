<?php

namespace app\src;

class ServerSoap {

    public static function createServer($object, $options, $wdsl=null){

        $server = new \SoapServer($wdsl, $options);
        $server->setObject($object);
        $server->handle();
    }   
}