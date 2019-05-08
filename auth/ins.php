<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmigen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO product (sno, store_name, address, product_name)
VALUES ('$_POST[sno]', '$_POST[name]', '$_POST[address]', '$_POST[product]')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
 header('location:pro.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
