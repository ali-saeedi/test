<?php


abstract class onlineGateway{

    var $option;
    public function __construct()
    {
        $this->option = array(
            "mellat" => array("merchant_id"=> 32432434345 , "username"=>"djsakjhds32" , "password"=> "skdojo321489"),
            "saman" => array(),
            "parsian" => array()
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();

}

class Mellat extends onlineGateway{

    private $gatewayName;
    private $mellat_options;
    public function __construct()
    {
            $this->gatewayName = "mellat";
            parent::__construct();
            $this->mellat_options = $this->option[$this->gatewayName];
    }
    public function sendRequest()
    {
      // return $this->foo;
        return $this->mellat_options;
    }

    public function verifyRequest()
    {

    }

}

class Factory {

    public static function make($class){

        $className = ucfirst($class);
        if(!class_exists($className)){
            return false;
        }
        else{
            return new $className;
        }

    }

}

$mellat = Factory::make("parsian");
print_r( $mellat->sendRequest() );
