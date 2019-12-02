<?php 
include 'Car.php';
// object of the class car
$myCar = new Car();
$myCar2 = new Car();

$myCar->set_values();

echo "Brand: ".$myCar->get_brand()."<br>";
echo "Brand: ".$myCar->get_color()."<br>";
echo "Brand: ".$myCar->get_price()."<br>";


$myCar2->setValues2("Toyota", "blue", "500");
echo "Brand: ".$myCar2->get_brand()."<br>";
echo "Brand: ".$myCar2->get_color()."<br>";
echo "Brand: ".$myCar2->get_price()."<br>";


?>