<?php
// Create database connection using config file
include_once("config.php");
// Fetch all ratings data from database
$result = mysqli_query($conn,"SELECT * FROM Ratings");
?>

<html>
    <head>
        <title>Homepage</title>
        
    </head>

    <body>
        <!-- this is a link for add page -->
        <a href="add.php"> Add New Rating</a><br/><br/>
        <table border=1>
            <tr>
                <th>Rating ID</th>
                <th>Value</th>
                <th>Action</th>
            </tr>

            <?php
            while($rating = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>". $rating['rating_id']. "</td>";
                echo "<td>". $rating['value']. "</td>";
                echo "<td><a href='edit.php?rating_id=$rating[rating_id]'>Edit</a> | 
                <a href='delete.php?rating_id=$rating[rating_id]'>Delete</a></td></tr>";  
            }
            ?>
        </table>
    </body>
</html>
