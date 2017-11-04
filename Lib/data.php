<?php

    class data{
       private $db;

       public function __construct()
       {
            $dsn = "mysql:host=localhost;dbname=Data";
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try
            {
                $this->db = new PDO($dsn,'root','',$options);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
       }

       public function getDb()
       {
           return $this->db;
       }
    }
?>