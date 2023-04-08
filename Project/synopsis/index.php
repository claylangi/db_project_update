<?php
// Create database connection using config file
include_once("config.php");
// Fetch all synopsis data from database and synopsis table
$result = mysqli_query($conn,"SELECT * FROM synopsis");
?>
<html>
    <head>
        <title>Homepage</title>

</head>

<body>
    <!-- this is a link for add page -->
    <a href="add.php"> Add New Synopsis</a><br/><br/>
    <table border=1>
        <tr>
            <th>Synopsis ID</th>
            <th>Synopsis</th>
            <th>Action</th>
        </tr>

        <?php
        while($synopsis = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>". $synopsis['synopsis_id']. "</td>";
            echo "<td>". $synopsis['synopsis_text']. "</td>";
            echo "<td><a href='edit.php?synopsis_id=$synopsis[synopsis_id]'>Edit</a> | 
            <a href='delete.php?synopsis_id=$synopsis[synopsis_id]'>Delete</a></td></tr>";  
        }
        ?>
    </table>
</body>
</html>