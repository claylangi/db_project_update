<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that review
$review_id = $_GET['review_id'];
// Delete review row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM Reviews WHERE review_id='$review_id'");
// After delete redirect to Home, so that latest reviews list will be displayed.
header ("Location:index.php") ;
?>
