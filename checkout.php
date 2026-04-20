<?php
session_start();
include 'db.php';

if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $id) {
        $res = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
        $row = mysqli_fetch_assoc($res);

        mysqli_query($conn, "INSERT INTO orders (product_name, price)
        VALUES ('{$row['name']}', '{$row['price']}')");
    }

    unset($_SESSION['cart']);
}

echo "Order placed successfully!";
?>