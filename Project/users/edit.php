<?php
// include database connection file
include_once("config.php");

// check if form is submitted for user update, then redirect to homepage after update
if(isset ($_POST ['update']))
{
    $user_id =$_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // update user data
    $result = mysqli_query($conn, "UPDATE users
    SET username='$username' ,email='$email' ,password='$password', role='$role' WHERE user_id='$user_id'");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$user_id =$_GET['user_id'];

// Fetch user data based on id
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");

while($user = mysqli_fetch_array($result))
{
    $username = $user['username'];
    $email = $user['email'];
    $password = $user['password'];
    $role = $user['role'];
}
?>

<html>
<head>
    <title>Edit User Data</title>
</head>
<body>

    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="role" value=<?php echo $role;?>></td>
            </tr>
            <tr>
            <td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
