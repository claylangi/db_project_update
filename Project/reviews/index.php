<?php
// Create database connection using config file
include_once("config.php");
// Fetch all reviews data from database
$result = mysqli_query($conn,"SELECT * FROM reviews");
?>

<html>
    <head>
        <title>Homepage</title>
        
    </head>

    <body>
        <!-- this is a link for add page -->
        <a href="add.php"> Add New Review</a><br/><br/>
        <table border=1>
            <tr>
                <th>Review ID</th>
                <th>Book ID</th>
                <th>User ID</th>
                <th>Rating ID</th>
                <th>Comment</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>

            <?php
            while($review = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>". $review['review_id']. "</td>";
                echo "<td>". $review['book_id']. "</td>";
                echo "<td>". $review['user_id']. "</td>";
                echo "<td>". $review['rating_id']. "</td>";
                echo "<td>". $review['comment']. "</td>";
                echo "<td>". $review['date_created']. "</td>";
                echo "<td><a href='edit.php?review_id=$review[review_id]'>Edit</a> | 
                <a href='delete.php?review_id=$review[review_id]'>Delete</a></td></tr>";  
            }
            ?>
        </table>
    </body>
</html>
