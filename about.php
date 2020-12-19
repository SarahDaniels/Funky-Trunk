<?php
$servername = "localhost";
$username = "mahs_sdaniels";
$password = "mustangs";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="mahs_sdaniels.sql" rel="database">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php" class="active">About Us</a>
        <a href="checkout.php">Checkout</a>
        <form id="searchform" class="search2" method="get" action="products.php"/>
        <input class="search2" id="test" type="text" placeholder="Search" name="search" size="10" maxlength="255"/>
    </div>
    <p>Welcome to the About Us page! We are just a small website page 
    selling oddities and trinkets. We appriciate your intrest in us. 
    Please take a look at what we have to offer on our 
    <a href="products.php">products</a> page.</p>
<div class="footer">
    <p><a href="about.php">About Us</a></p>
</div>
</body>
</html>