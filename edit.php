<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Online Shop | Add</title>
</head>

<body>
    <?php
    include 'config.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $select = "SELECT * FROM prod WHERE id=$id";
        $select_query = mysqli_query($con, $select);
        $row = mysqli_fetch_assoc($select_query);
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['image'];
    }
    ?>
    <center>
        <div class="main">
            <h1>Online Shop | Update</h1>
            <form action="up.php" method="post" enctype="multipart/form-data">
                <label for="id">id</label>
                <input type="text" name="id" id="id" value="<?php echo $id; ?>">
                <br>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                <br>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?php echo $price; ?>">
                <br>
                <label for="file">Choose photo 😍</label>
                <input type="file" name="image" value="Image" id="file" style="display: none;" value="<?php echo $image; ?>">
                <button name="update" type="submit">Update 😍</button>
                <br><br>
                <a href="products.php">All the products 🤖</a>
            </form>
        </div>
        <p>Developed By Ha3ker 🧑🏻‍💻</p>
    </center>
</body>

</html>