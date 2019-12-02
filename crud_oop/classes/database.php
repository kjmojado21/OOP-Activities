<?php 
// contains information to connect to your phpmyadmin/mysql
class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database_name = 'companyxyz';
    public $conn;


    //constructor is a method is automatically created when an object is created

    public function __construct(){

        $this->conn = new mysqli ($this->servername,$this->username,$this->password,$this->database_name);

        if($this->conn->connect_error){
            die('connect_error'.$this->conn->connect_error);
        }
        
        return $this->conn;

    }




}










?>