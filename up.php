





<?php

include 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $image_path = "images/" . $image;
    $update = "UPDATE prod SET name='$name', price='$price', image='$image' WHERE id=$id";
    $update_query = mysqli_query($con, $update);
    if (move_uploaded_file($image_tmp, $image_path)) {
        echo "<script>alert('image uploaded successfully');</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
    header('location: products.php');
}
