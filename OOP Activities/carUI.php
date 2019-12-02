<?php
    include 'Car.php';

    //object <-- instance/blueprint of your class
    $myCar = new Car();
    $myCar2 = new Car();

    $myCar->set_values();
    $myCar2->set_values2("Toyota", "blue", 500);

    // echo "Brand: " .$myCar->brand;
    echo "Brand: " .$myCar->get_brand(). "<br>";
    echo "Color: " .$myCar->get_color(). "<br>";
    echo "Price: " .$myCar->get_price(). "<br>";

    
    echo "Brand: " .$myCar2->get_brand(). "<br>";
    echo "Color: " .$myCar2->get_color(). "<br>";
    echo "Price: " .$myCar2->get_price(). "<br>";
?>