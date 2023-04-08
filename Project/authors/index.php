<?php
// Create database connection using config file
include_once("config.php");
// Fetch all data from author table
$result = mysqli_query($conn, "SELECT * FROM authors");

?>

<html>

<head>
    <title>Homepage</title>

</head>

<body>
    <!-- this is a link for add page -->
    <a href="add.php"> Add New Author</a><br /><br />
    <table border=1>
        <tr>
            <th>Author ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php
        while ($author = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $author['author_id'] . "</td>";
            echo "<td>" . $author['author_name'] . "</td>";
            echo "<td>" . $author['author_desc'] . "</td>";
            echo "<td><a href='edit.php?author_id=$author[author_id]'>Edit</a> | 
                <a href='delete.php?author_id=$author[author_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>