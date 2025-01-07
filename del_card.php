<?php
include 'config.php';

$id = $_GET['id'];
$delete = "DELETE FROM addcard WHERE id = $id";
$delete_query = mysqli_query($con, $delete);
if ($delete_query) {
    header("Location: cart.php");
} else {
    echo "<script>alert('Error');</script>";
    echo "Error";
}




?>