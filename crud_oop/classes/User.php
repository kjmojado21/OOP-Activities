<?php 
require_once 'Database.php';



class User extends Database{


    public function createUser($uname,$pass,$fname,$lname){
         $new_pass = md5($pass);

        $sql = "INSERT INTO user(username,password,first_name,last_name) VALUES ('$uname','$pass','$fname','$lname')";

        if($this->conn->query($sql)){
            header("location:login.php");
        }else{
            echo "INSERTION FAILED. ".$this->conn->connect_error;
        }
    }

    public function login($uname,$pword){
         $hashed_pass = md5($pword);

        $sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pword'";

        $result = $this->conn->query($sql);
        print_r($result);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();

             return $row['id'];

        }else{
        // return if the query didnt match anything
         return false;
        }

       
    }
    public function getUsers(){
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;

            

            }return $rows;
        }else{
            return false;
        }

    }

    public function deleteUser($id){
        $sql = "DELETE FROM user WHERE id = '$id'";

        $result = $this->conn->query($sql);

        if($result == false){
            die('cannot delete user' .$this->conn->connect_error);
        }else{
            header("location:dashboard.php");
        }

        

    }
    public function getUserID($id){
        $sql = "SELECT * FROM USER WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result == false){
            die('cannot retrieve user data'.$this->conn->connect_error);
        }else{
            return $result->fetch_assoc();
        }

    }
    public function editUser($uname,$pword,$fname,$lname,$id){
        $sql = "UPDATE user SET username = '$uname', password = '$pword', first_name = '$fname', last_name = '$lname' WHERE id = '$id'";
        
        $result = $this->conn->query($sql);

        if($result == false){
            die('cannot edit user'.$this->conn->connect_error);
        }else{
            header('location:dashboard.php');
        }

    }














}













?>