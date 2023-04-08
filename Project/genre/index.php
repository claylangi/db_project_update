<?php
// Create database connection using config file
include_once("config.php");
// Fetch all genres data from database and genre table
$result = mysqli_query($conn, "SELECT * FROM genre");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <!-- this is a link for add page -->
    <a href="add.php">Add New Genre</a><br /><br />
    <table border=1>
        <tr>
            <th>Genre ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php
        while ($genre = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $genre['genre_id'] . "</td>";
            echo "<td>" . $genre['genre_name'] . "</td>";
            echo "<td>" . $genre['genre_desc'] . "</td>";
            echo "<td><a href='edit.php?genre_id=$genre[genre_id]'>Edit</a> | 
                <a href='delete.php?genre_id=$genre[genre_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>