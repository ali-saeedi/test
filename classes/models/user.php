<?php
require_once "../db.php";
class User extends Db{

    public $table;
    public function __construct()
    {

        return $this->table = "users";
    }

}

$object = new User();
var_dump($object);

?>