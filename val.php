<?php
include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM prod WHERE id = $id";
    $select_query = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($select_query);
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['image'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>Confirm Buy</title>
</head>

<body>
    <center>
        <form action="insert_card.php" method="post" enctype="multipart/form-data">
            <h1>Confirm Buy</h1>
            <input type="text" name="name" value="<?php echo $name; ?>" hidden>
            <input type="text" name="price" value="<?php echo $price; ?>" hidden>
            <input type="text" name="image" value="<?php echo $image; ?>" hidden>
            <img src="images/<?php echo $image; ?>" alt="<?php echo $name; ?>">
            <h3><?php echo $name; ?></h3>
            <p>Price: <?php echo $price; ?></p>
            <button name="add" type="submit">Confirm</button>

            <br><br>
            <a href="shop.php">Back</a>

            <br><br>
            <a href="cart.php">My Cart</a>
            <br><br>
            <a href="shop.php">All the products 🤖</a>
            <br><br>


        </form>
    </center>

</body>
<style>
    body {
        font-family: 'Roboto', Arial, sans-serif;
        background-color: #f0f4f8;
        margin: 0;
        padding: 0;
        color: #333;
    }

    center {
        max-width: 600px;
        margin: 40px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 30px;
        font-size: 28px;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h3 {
        color: #34495e;
        margin-bottom: 10px;
    }

    p {
        color: #7f8c8d;
        margin-bottom: 20px;
    }

    button {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 12px 24px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    a {
        display: inline-block;
        margin-top: 15px;
        color: #3498db;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #2980b9;
    }
</style>

</html>