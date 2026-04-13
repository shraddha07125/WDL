<?php

$conn = mysqli_connect("localhost","root","","contactdb");

$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "INSERT INTO contacts(name,phone) VALUES('$name','$phone')";

mysqli_query($conn,$sql);

echo "Data Saved Successfully";

?>

<br><br>
<a href="form.html">Back</a>
