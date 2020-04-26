<?php

class Db{


    public $table;
    public function all()
    {
        echo "select * from {$this->table}";
    }

    public function find($id , $columns=null){

        $columns = !is_null($columns) ? implode("," , $columns) : "*" ;
        echo "select $columns from {$this->table} where id=$id";
    }


}

$object = new db();
//$object->table = "users";
//$columns = ["name" , "id"];
//$object->find(5 , $columns);
//echo "<br>";
//var_dump($object);



?>