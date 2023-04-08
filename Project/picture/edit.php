<?php
// include database connection file
include_once("config.php");

// check if form is submitted for genre update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $pic_id = $_POST['pic_id'];
    $pic_file_name = basename($_FILES["pic_file"]["name"]);

    // Include database connection file
    include_once("config.php");

    // Check if gambar folder exists, create it if not
    if (!file_exists("C:/xampp/htdocs/database/Project/gambar/")) {
        mkdir("C:/xampp/htdocs/database/Project/gambar/");
    }

    // Move uploaded file to destination folder
    if (move_uploaded_file($_FILES["pic_file"]["tmp_name"], "C:/xampp/htdocs/database/Project/gambar/" . $pic_file_name)) {
        // update picture data
        $result = mysqli_query($conn, "UPDATE picture SET pic_link='$pic_file_name' WHERE pic_id='$pic_id'");

        // Redirect to homepage to display updated picture in list
        header("Location: index.php");
    } else {
        // Show error message if failed to move uploaded file
        echo "Failed to upload picture.";
    }
}

// Display selected picture data based on id
// Getting id from url
$pic_id = $_GET['pic_id'];

// Fetch picture data based on id
$result = mysqli_query($conn, "SELECT * FROM picture WHERE pic_id='$pic_id'");

while ($picture = mysqli_fetch_array($result)) {
    $pic_file_name = $picture['pic_link'];
}
?>

<html>

<head>
    <title>Edit Picture Data</title>
</head>

<body>

    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_picture" method="post" action="edit.php" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <td>Current Picture:</td>
                <td><img src="/database/Project/gambar/<?php echo $pic_file_name; ?>" width="100" height="100"></td>
            </tr>
            <tr>
                <td>Upload New File</td>
                <td><input type="file" name="pic_file"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="pic_id" value=<?php echo $_GET['pic_id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>