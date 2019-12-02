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

  <div class="card w-50">
      <div class="card-body bg-dark text-light">
         <form  method="post">
             <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" class="form-control"> <br>
                 <label for="">Position</label>
                 <input type="radio" name="position" value="staff">Staff
                 <input type="radio" name="position" value="admin">Admin
                 <br>
                 <label for="">Civil Status</label> <br>
                 <input type="radio" name="civil_status" value="single">Single
                 <input type="radio" name="civil_status" value="married">Married
                 <br>
                 <label for="">Employment Status</label>
                 <select name="employment_status" class="form-control">
                    <option value="contractual">Contractual</option>
                    <option value="probi">Probationary</option>
                    <option value="regular">Regular</option>


                 </select>
                 <label for="">Numbers of hours worked</label>
                 <input type="number" name="hours"  class="form-control">
                 <br>
                 <button type="submit" name="calc" class="btn btn-primary btn-block">Calculate</button>
             </div>
         </form>
         <?php 
         include 'employee.php';
         if(isset($_POST['calc'])){
             $position = $_POST['position'];
             $status = $_POST['civil_status'];
             $employmentStatus = $_POST['employment_status'];
             $workedHours = $_POST['hours'];

             $employee = new Employee();

             $employee->set_values($position,$status,$employmentStatus,$workedHours);

             echo $position;
             echo "<br>";
             echo $status;
             echo "<br>";
             echo $employmentStatus;
             echo "<br>";
             echo $workedHours;
             echo "<br>";

           echo $employee->position_salary();


         }
         
         
         
         
         ?>
      </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>