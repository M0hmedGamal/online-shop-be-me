<?php
include 'config.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $insert = "INSERT INTO addcard (name, price) VALUES ('$name', '$price')";
    $insert_query = mysqli_query($con, $insert);
    if ($insert_query) {
        header("Location: cart.php");
    } else {
        echo "Error";
    }
}




?>