<?php










?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>My Cart</title>
</head>

<body>
    <center>
        <h1>My Cart</h1>
    </center>

    <?php
    include 'config.php';
    $select = "SELECT * FROM addcard";
    $select_query = mysqli_query($con, $select);
    while ($row = mysqli_fetch_assoc($select_query)) {
        echo " <center>
        
        <table>
            <thead>
                <tr>
                    <th scope='col'>Product name</th>
                    <th scope='col'>Procduct price</th>
                    <th scope='col'>Delete product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_card.php?id=$row[id]'>Delete</a></td>
                </tr>

            </tbody>
            

        </table>
    </center>
";
    }
    echo "<a href='shop.php'>Back to the product page</a>"
    ?>
</body>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    center {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f8f8f8;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        color: #e74c3c;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #c0392b;
    }

    .empty-cart {
        text-align: center;
        color: #777;
        margin-top: 50px;
    }

    .total {
        margin-top: 30px;
        text-align: right;
        font-size: 18px;
        font-weight: bold;
    }

    .checkout-btn {
        display: inline-block;
        background-color: #2ecc71;
        color: white;
        padding: 12px 24px;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .checkout-btn:hover {
        background-color: #27ae60;
    }
</style>

</html>