<?php
// Create database connection using config file
include_once("config.php");
// Fetch all publishers data from database and publishers table
$result = mysqli_query($conn, "SELECT * FROM publishers");
?>

<html>

<head>
    <title>Homepage</title>

</head>

<body>
    <!-- this is a link for add page -->
    <a href="add.php"> Add New Publisher</a><br /><br />
    <table border=1>
        <tr>
            <th>Publisher ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php
        while ($publisher = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $publisher['publisher_id'] . "</td>";
            echo "<td>" . $publisher['publisher_name'] . "</td>";
            echo "<td>" . $publisher['publisher_desc'] . "</td>";
            echo "<td><a href='edit.php?publisher_id=$publisher[publisher_id]'>Edit</a> | 
                <a href='delete.php?publisher_id=$publisher[publisher_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>