<?php
// include database connection file
include_once("config.php");

// check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $author_id = $_POST['author_id'];
    $name = $_POST['name'];
    $desc = $_POST['author_desc'];

    // update author data
    $result = mysqli_query($conn, "UPDATE authors SET author_name='$name' SET author_desc='$desc' WHERE author_id='$author_id'");

    // Redirect to homepage to display updated author in list
    header("Location: index.php");
}
?>

<?php
// Display selected author data based on id
// Getting id from url
$author_id = $_GET['author_id'];

// Fetech author data based on id
$result = mysqli_query($conn, "SELECT * FROM authors WHERE author_id='$author_id'");

while ($author = mysqli_fetch_array($result)) {
    $name = $author['author_name'];
    $desc = $author['author_desc'];
}
?>

<html>

<head>
    <title> Edit Author Data </title>
</head>

<body>

    <a href="index.php">Home</a>
    <br /><br />

    <form name="update author" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="author_desc" value="<?php echo $desc; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="author_id" value="<?php echo $_GET['author_id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>