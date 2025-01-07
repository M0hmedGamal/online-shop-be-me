<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM prod WHERE id=$id";
    $delete_query = mysqli_query($con, $delete);
    if($delete_query){
        header('location: products.php');
    }
}



?>