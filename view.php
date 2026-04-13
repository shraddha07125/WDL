<?php

$conn = mysqli_connect("localhost","root","","contactdb");

$result = mysqli_query($conn,"SELECT * FROM contacts");

echo "<h2>Contact List</h2>";

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Phone</th></tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['phone']."</td>";
echo "</tr>";
}

echo "</table>";

?>

<br><br>
<a href="form.html">Back</a>
_
