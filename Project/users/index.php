<?php
// Include the database connection file
include_once("config.php");
// Fetch all data from the user table
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <!-- Add new user link -->
        <a href="add.php">Add New User</a><br/><br/>
        <table border=1>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            // Loop through the data from the user table and display them in a table
            while($user = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>". $user['user_id']. "</td>";
                echo "<td>". $user['username']. "</td>";
                echo "<td>". $user['email']. "</td>";
                echo "<td>". $user['password']. "</td>";
                echo "<td>". $user['role']. "</td>";
                // Add edit and delete links with the user_id as a parameter
                echo "<td><a href='edit.php?user_id=$user[user_id]'>Edit</a> | 
                <a href='delete.php?user_id=$user[user_id]'>Delete</a></td></tr>";  
            }
            ?>
        </table>
    </body>
</html>
