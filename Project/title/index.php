<?php
// Create database connection using config file
include_once("config.php");
// Fetch all courses data from database and title table
$result = mysqli_query($conn,"SELECT * FROM title");
?>

<html>
    <head>
        <title>Homepage</title>
        
    </head>

    <body>
        <!-- this is a link for add page -->
        <a href="add.php"> Add New Title</a><br/><br/>
        <table border=1>
            <tr>
                <th>Title ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

            <?php
            while($title = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>". $title['title_id']. "</td>";
                echo "<td>". $title['title_name']. "</td>";
                echo "<td><a href='edit.php?title_id=$title[title_id]'>Edit</a> | 
                <a href='delete.php?title_id=$title[title_id]'>Delete</a></td></tr>";  
            }
            ?>
        </table>
    </body>
</html>
