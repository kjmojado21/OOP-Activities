<?php 

    require_once 'classes/User.php';
 
   $user = new User();


   session_start();

   if(isset($_POST['add'])){
   $uname = $_POST['username'];
   $pass = $_POST['password'];
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];

   $user->createUser($uname,$pass,$fname,$lname);

   }

   elseif(isset($_POST['login'])){
       $uname = $_POST['username'];
       $pword =  $_POST['password'];

       $id = $user->login($uname,$pword);

       if($id){
           $_SESSION['login_id'] = $id;

           header("location:dashboard.php");
       }else{
           echo "user does not exist!";
       }
   }
   elseif($_GET['actiontype'] == 'delete'){
       $id = $_GET['id'];

       $user->deleteUser($id);

   }
   elseif(isset($_POST['edit'])){

      
       $uname = $_POST['username'];
       $pword = $_POST['password'];
       $fname = $_POST['first_name'];
       $lname = $_POST['last_name'];
       $id = $_POST['id'];

       

    $user->editUser($uname,$pword,$fname,$lname,$id);


   }
 






?>