<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that rating
$rating_id = $_GET['rating_id'];
// Delete rating row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM ratings WHERE rating_id='$rating_id'");
// After delete redirect to Home, so that latest ratings list will be displayed.
header("Location: index.php");
?>
