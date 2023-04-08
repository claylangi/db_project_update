<?php
// include database connection file
include_once("config.php");

// check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $publisher_id = $_POST['publisher_id'];
    $name = $_POST['name'];
    $desc = $_POST['publisher_desc'];

    // update publisher data
    $result = mysqli_query($conn, "UPDATE publishers
    SET publisher_name='$name' SET publisher_desc='$desc' WHERE publisher_id='$publisher_id'");

    // Redirect to homepage to display updated publisher in list
    header("Location: index.php");
}
?>
<?php
// Display selected publisher data based on id
// Getting id from url
$publisher_id = $_GET['publisher_id'];

// Fetech publisher data based on id
$result = mysqli_query($conn, "SELECT * FROM publishers WHERE publisher_id='$publisher_id'");

while ($publisher = mysqli_fetch_array($result)) {
    $name = $publisher['publisher_name'];
    $desc = $publisher['publisher_desc'];
}
?>

<html>

<head>
    <title> Edit Publisher Data </title>
</head>

<body>

    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_publisher" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="publisher_desc" value="<?php echo $desc; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="publisher_id" value="<?php echo $_GET['publisher_id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>