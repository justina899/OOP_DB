<?php
class DB{
    public $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "my_data_base2";
        $this->conn = new mysqli($servername, $username, $password, $db);
    }







}




?>