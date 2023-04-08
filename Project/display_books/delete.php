<?php
// include database connection file
include_once("config.php");
// Get id from URL to delete that book
$book_id = $_GET['book_id'];
// Delete book row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM books WHERE book_id='$book_id'");
// After delete redirect to Home, so that latest books list will be displayed.
header("Location: index.php");
?>
