<?php
// Create database connection using config file
include_once("config.php");
// Fetch all genres data from database and genre table
$result = mysqli_query($conn, "SELECT * FROM picture");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <!-- this is a link for add page -->
    <a href="add.php">Add New Picture</a><br /><br />
    <table border=1>
        <tr>
            <th>Picture ID</th>
            <th>Picture</th>

            <th>Action</th>
        </tr>

        <?php
        while ($picture = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $picture['pic_id'] . "</td>";
            // echo "<td>" . $picture['pic_link'] . "</td>";
            echo "<td><img src='/database/Project/gambar/" . $picture['pic_link'] . "' width='100' height='150'></td>";

            echo "<td><a href='edit.php?pic_id=$picture[pic_id]'>Edit</a> | 
                <a href='delete.php?pic_id=$picture[pic_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>