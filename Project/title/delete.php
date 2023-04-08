<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that title
$title_id = $_GET['title_id'];
// Delete title row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM title WHERE title_id='$title_id'");
// After delete redirect to Home, so that latest title list will be displayed.
header("Location:index.php");
?>