<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that synopsis
$synopsis_id = $_GET['synopsis_id'];
// Delete synopsis row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM synopsis WHERE synopsis_id='$synopsis_id'");
// After delete redirect to Home, so that latest synopsis list will be displayed.
header ("Location:index.php") ;
?>