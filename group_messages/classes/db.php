<?php

class db{
    private $host   = "localhost";
    private $dbname =  "admin_inced";
    private $username = "admin_inced";
    private $password = '!nced!um678';
    protected $con;

    public function __construct(){

        try{
         // new PDO("msql:host=localhost;dbname=messenger", "root","");   

            $this->con = new PDO("mysql:host=".$this->host. ";dbname=".$this->dbname, $this->username, $this->password );
           
            }catch(Exception $e){
                echo "DataBase Connection Problem: ".$e->getMessage();
            }

    }


}



?>