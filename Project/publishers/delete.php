<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete the publisher
$publisher_id = $_GET['publisher_id'];
// Delete publisher row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM publishers WHERE publisher_id='$publisher_id'");
// After delete redirect to Home, so that the latest publishers list will be displayed.
header("Location: index.php");
?>