<?php
// Check If form submitted, insert form data into course table.
if (isset($_POST['submit'])) {

    $username1 = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $role = $_POST['role'];

    // include database connection file
    include_once("config.php");

    // Insert course data into table
    $result = mysqli_query($conn, "INSERT INTO users ( username, email, password, role)
    VALUES ('$username1','$email','$password1','$role')");

    // Show message when course added
    echo "User added successfully. <a href='index.php'>View Users</a><br><br>";
}
?>

<html>

<head>
    <title>Add User</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="role"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>