<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that user
$user_id = $_GET['user_id'];
// Delete user row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM users WHERE user_id='$user_id'");
// After delete redirect to Home, so that latest users list will be displayed.
header("Location: index.php");
?>
