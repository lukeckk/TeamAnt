<?php
session_start();

if($_SESSION['name']=="admin" && $_SESSION['password']=="admin")
{

    require 'db.php';
    $sql = 'select * from pizza';

    $result = @mysqli_query($cnxn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $ordernumber = $row['#'];
        $name = $row['name'];
        $pnumber = $row['pNumber'];
        $email = $row['email'];
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
        $size = $row['size'];
        $notes = $row['notes'];
        $ordertype = $row['orderType'];

        echo "<p>--------------------------------------------------------------------------</p>
            <p>Order Name: $name<br>
            Phone number: $pnumber <br> Email: $email <br> Address: $address, $city,$state</p>
            <p> Pizza Size: $size <br>
            Additional Notes: $notes <br> Order Type: $ordertype </p>
            <p>Toppings:</p>";

        if($row['MarinaraSauce'] !=0) {
            $marinara = 'MarinaraSauce';
            echo "<p> $marinara </p>";
        }
        if($row['Peperoni']  != 0) {
            $pepperoni = 'Peparoni';
            echo "<p> $pepperoni </p>";
        }
        if($row['Onions'] != 0) {
            $onions = 'Onions';
            echo "<p> $onions </p>";
        }
        if($row['BellPepper'] != 0 ) {
            $bellPeppers = 'BellPepper';
            echo "<p> $bellPeppers </p>";
        }
        if($row['Mushroom'] != 0 ) {
            $mushrooms = 'Mushroom';
            echo "<p> $mushrooms </p>";
        }
        if($row['Cheese']  != 0) {
            $cheese = 'Cheese';
            echo "<p> $cheese </p>";
        }
        if($row['Ham'] != 0 ) {
            $ham = 'Ham';
            echo "<p> $ham </p>";
        }
        if($row['AlfredoSauce'] != 0 ) {
            $alfredoSauce = 'AlfredoSauce';
            echo "<p> $alfredoSauce </p>";
        }


        echo "<p>--------------------------------------------------------------------------</p>";

    }


}
else
{
    echo 'Please <a href="https://teamant.greenriverdev.com/PizzaOrder/login.php" >click here</a> to log in ';
}



?>



