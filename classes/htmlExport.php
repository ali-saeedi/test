<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . "../interfaces/canExport.php";
class htmlExport implements canExport{


    public function Export(){
        echo "data format: html";
    }
}