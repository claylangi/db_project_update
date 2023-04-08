<!-- register.php -->
<?php
// Check If form submitted, insert form data into course table.
if (isset($_POST['submit'])) {
  
    $username1 = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];

    // include database connection file
    include_once("config.php");

    // Insert course data into table
    $result = mysqli_query($conn, "INSERT INTO users (username, email, password)
    VALUES ('$username1','$email','$password1')");

    // Show message when course added
    echo "User added successfully. <a href='login.php'> Login</a><br><br>";
}
?>

<html>
<head>
    <title>Add User</title>
</head>
<body>
   
    <br/><br/>

    <form action="register.php" method="post" name="form1">
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
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

