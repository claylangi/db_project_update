<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that author
$author_id = $_GET['author_id'];
// Delete author row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM authors WHERE author_id='$author_id'");
// After delete redirect to Home, so that latest author list will be displayed.
header("Location:index.php");
?>
