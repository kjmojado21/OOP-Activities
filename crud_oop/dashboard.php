<?php 

require_once 'classes/User.php';
$users = new User();
$result = $users->getUsers();
session_start();
$currentUser = $users->getUserID($_SESSION['login_id']);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <table class="table table-striped table-bordered mt-5">
        <thead>
            <th>USER ID</th>
            
            <th>USERNAME</th>
            
            <th>FIRST NAME</th>
            
            <th>LAST NAME</th>
            
            <th>ACTION</th>

        </thead>

        <tbody>
            <?php 
            echo $currentUser['first_name'];
            foreach($result as $key => $row){
                $id = $row['id'];

                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td><a name='edit' id='' class='btn btn-outline-warning' href='edit_user.php?user_id=$id' role='button'>Edit User</a>  ";
                
                echo "<a name='delete' id='' class='btn btn-outline-danger' href='userAction.php?actiontype=delete&id=$id' role='button'>Delete User</a></td>";

            }
            
            
            
            
            
            ?>

        </tbody>



      </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>