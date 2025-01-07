<?php








?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Online Shop | Add</title>
</head>

<body>
    <center>
        <div class="main">
            <h1>Online Shop</h1>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <br>
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
                <br>
                <label for="file">Choose photo 😍</label>
                <input type="file" name="image" value="Image" id="file" style="display: none;">
                <button name="upload">Save 😍</button>
                <br><br>
                <a href="products.php">All the products 🤖</a>
            </form>
        </div>
        <p>Developed By Ha3ker 🧑🏻‍💻</p>
    </center>
</body>

</html>