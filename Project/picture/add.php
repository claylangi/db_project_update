<?php
// Check if form submitted, insert form data into picture table
if (isset($_POST['Submit'])) {

    $pic_link = basename($_FILES["pic_file"]["name"]);

    // Include database connection file
    include_once("config.php");

    // Check if gambar folder exists, create it if not
    if (!file_exists("C:/xampp/htdocs/database/Project/gambar/")) {
        mkdir("C:/xampp/htdocs/database/Project/gambar/");
    }

    // Insert picture data into table
    $result = mysqli_query($conn, "INSERT INTO picture ( pic_link) VALUES ( '$pic_link')");

    // Move uploaded file to destination folder
    if (move_uploaded_file($_FILES["pic_file"]["tmp_name"], "C:/xampp/htdocs/database/Project/gambar/" . $pic_link)) {
        // Show message when picture added
        echo "Picture added successfully. <a href='index.php'>View Pictures</a><br><br>";
    } else {
        // Show error message if failed to move uploaded file
        echo "Failed to upload picture.";
    }
}
?>

<html>

<head>
    <title>Add Picture</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" enctype="multipart/form-data">
        <table width="25%" border="0">

            <tr>
                <td>Choose Picture</td>
                <td><input type="file" name="pic_file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>