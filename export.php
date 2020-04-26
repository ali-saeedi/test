<?php
//
//require_once "classes/htmlExport.php";
//require_once "classes/jsonExport.php";
//require_once "classes/xmlExport.php";
//
//$export = "json";
//$handler = $export . "export";
//
//$handlerObject = new $handler;
//$handlerObject->export();
////var_dump($handlerObject);

require_once "classes/htmlExport.php";
require_once "classes/jsonExport.php";
require_once "classes/xmlExport.php";


$format = "xml";
$handler_require = $format . "Export";
$handlerObject = new $handler_require;
//$handlerObject->export();


class handlerExport{

    public function doExport(canExport $handler){
        $handler->Export();
    }

}

$object = new handlerExport();
$object->doExport($handlerObject);