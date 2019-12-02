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
        <input type="text" name="n1" placeholder="Num 1"><br>
        <input type="text" name="n2" placeholder="Num 2"><br>
        <input type="radio" name="ops" value="add">Addition
        <input type="radio" name="ops" value="sub">Subtraction
        <input type="radio" name="ops" value="mult">Multiplication
        <input type="radio" name="ops" value="div">Division<br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        include 'Calculator.php';

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $op = $_POST["ops"];

        // instanciating of your class (a copy of your package/class)
        $calc = new Calculator;

        $calc->set_values($n1, $n2, $op);
        echo "Answer is " .$calc->compute();

    }
?>