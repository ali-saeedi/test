<?php

abstract class Gateways{

    public $options;
    public function __construct()
    {
        $this->options = array(
            "mellat" => array("merchant"=>234132147327 , "username"=> "sadjkasj349128" , "password" => "31321ejkkj3219"),
            "parsian" => array("code"=>"dajkdask" , "username"=>"djfasllkadjs"),
            "Zarinpal" => array("code"=>"dasf312432" , "username"=>"1234fdsafdasfg")
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();


}

class Gateway extends Gateways{

    private $gatewayName;
    private $mellat_options;

    public function __construct()
    {
        $this->gatewayName = "mellat";
        parent::__construct();
        $this->mellat_options = $this->options[$this->gatewayName];
    }

    public function sendRequest()
    {
        return $this->mellat_options;
    }
    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }

}


class createObject{

    private $className;
    public static function make($class)
    {

        $classname = ucfirst($class);
        if (!class_exists($classname)) {
            return false;
        }
        return new $classname;

    }

}

$gateway = createObject::make("gateway");
var_dump( $gateway->sendRequest() );


