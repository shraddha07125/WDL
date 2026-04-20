<?php
session_start();
include 'db.php';
?>

<h2>Products</h2>

<?php
$res = mysqli_query($conn, "SELECT * FROM products");

while($row = mysqli_fetch_assoc($res)) {
    echo "<div>
        <h3>{$row['name']}</h3>
        <p>Price: {$row['price']}</p>
        <a href='add_to_cart.php?id={$row['id']}'>Add to Cart</a>
    </div><hr>";
}
?>
<a href="cart.php">View Cart</a>