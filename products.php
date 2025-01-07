<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>All Products</title>
</head>

<body>
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
        echo "<a href='delete.php?id=$id'>Delete</a>";
        echo "<br><a href='edit.php?id=$id'>Edit</a>";
        echo "</div>";
    }

    ?>
</body>

</html>