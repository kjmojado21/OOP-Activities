<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="text" name="age" placeholder="Age"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        include 'Person.php';

        $name = $_POST["name"];
        $add = $_POST["address"];
        $age = $_POST["age"];

        $p = new Person();
        $p->set_values($name, $add, $age);

        echo "NAME: " .$p->get_name(). "<br>";
        echo "ADDRESS: " .$p->get_add(). "<br>";
        echo "AGE: " .$p->get_age(). "<br>";
    }
?>