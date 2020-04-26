<?php

trait logger{

    public function log($data){

        echo "$data saved";

    }

}


class example{

    use logger;

}

$object = new example();
$object->log("data");