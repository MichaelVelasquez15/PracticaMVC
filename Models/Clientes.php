<?php

class Clientes{
    private $conn;

    public function __construct() {
  
    }

    public function all(){
        $query = 'SELECT * FROM clientes';

        try {
            $stm = $this -> conn -> prepare($query);
            $stm -> execute();
            
            $rs = $stm->get_result();
            $data = $rs->fetch_assoc();
        }  catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}

