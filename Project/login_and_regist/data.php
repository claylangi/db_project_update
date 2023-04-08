<!-- data.php -->
<?php
session_start();



include("config.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 'admin') {
            header("Location:/database/Project/admin/admin_page.php");
        } else {
            header("Location:halaman.php");
        }
    } else {
        echo "Login Failed";
    }
}
?>