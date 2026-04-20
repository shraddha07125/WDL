<?php
session_start();
include 'db.php';

echo "<h2>Your Cart</h2>";

if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $id) {
        $res = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
        $row = mysqli_fetch_assoc($res);

        echo "{$row['name']} - {$row['price']}
        <a href='remove.php?id=$id'>Remove</a><br>";
    }
}

echo "<br><a href='checkout.php'>Checkout</a>";
?>