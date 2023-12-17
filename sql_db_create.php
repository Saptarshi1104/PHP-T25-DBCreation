<?php
echo "Welcome to MySQL Database Creation in PHP <br>";
// ==============CODE START======================= \\
// Ways to connect to a MySQL Database
// Method-1: MySQLi Extension {Procedural and Object Oriented}
// Method-2: PDO
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
}
echo "Connection was successful <br>";
// Create a database
$sql = "CREATE DATABASE dbSap2";
$result = mysqli_query($conn, $sql);
// Check for the database creation success
if($result){
    echo "The Database was created successfully <br>";
}
else{
    echo "The Database was not created successfully: " . mysqli_error($conn) . "<br>";
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
// ==============CODE END========================== \\
?>