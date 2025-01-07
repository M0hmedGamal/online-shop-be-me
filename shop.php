<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>All Products</title>
</head>

<body>
    <nav><a href="cart.php">My Cart</a></nav>
    <center>
        <h1>The available products</h1>
    </center>
    <?php
    include 'config.php';
    $select = "SELECT * FROM prod";
    $select_query = mysqli_query($con, $select);
    while ($row = mysqli_fetch_assoc($select_query)) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['image'];
        echo "<div class='product'>";
        echo "<img src='images/$image' alt='$name'>";
        echo "<h3>$name</h3>";
        echo "<p>Price: $price</p>";
        echo "<br><a href='val.php?id=$id'>Add To Cart</a>";
        echo "</div>";
    }

    ?>
</body>

</html>