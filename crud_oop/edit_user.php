<?php 
include 'classes/User.php';

$user = new User();

$id = $_GET['user_id'];

$row = $user->getUserID($id);







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
          <div class="card">
              <div class="card-header">

              </div>
              <div class="card-body">
                  <form method="post" action="userAction.php">
                  <div class="form-group">
                      <label for="">Enter Username</label>
                      <input type="text" value = '<?php echo $row['username'] ?>' name="username" class="form-control">
                      <label for="">Enter Password</label>
                      <input type="password" value = '<?php echo $row['username'] ?>' name="password"  class="form-control">
                      <label for="">Enter first name</label>
                      <input type="text" name="first_name" class="form-control" value = '<?php echo $row['username'] ?>'>
                      <label for="">Enter last name</label>
                      <input type="text" name="last_name" class="form-control" value = '<?php echo $row['username'] ?>'>
                      <br>
                      <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                      
                      <button type="submit" name="edit" class="btn btn-primary">Save Edit</button>
                  </div>
                  </form>
                 
              </div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>