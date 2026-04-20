<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

mysqli_query($conn, "INSERT INTO products (name, price)
VALUES ('$name', '$price')");

header("Location: admin.php");
?>