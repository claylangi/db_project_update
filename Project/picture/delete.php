<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that genre
$pic_id = $_GET['pic_id'];
// Delete genre row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM picture WHERE pic_id='$pic_id'");
// After delete redirect to Home, so that latest genre list will be displayed.
header("Location:index.php");
