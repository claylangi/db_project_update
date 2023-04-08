<?php
$servername ="localhost";
$username = "root"; // Your Username will depend on your database, XAMPP default is root
$password =""; // Your Username will depend on your database, XAt•1PP default is empty
$dbname = "bookdb"; //Change into your database name
// Create connection
$conn = mysqli_connect($servername,$username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "";
//make login form
 ?>