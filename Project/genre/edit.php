<?php
// include database connection file
include_once("config.php");

// check if form is submitted for genre update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $genre_id = $_POST['genre_id'];
    $name = $_POST['name'];
    $desc = $_POST['author_desc'];

    // update genre data
    $result = mysqli_query($conn, "UPDATE genre
    SET genre_name='$name' SET genre_desc='$desc' WHERE genre_id='$genre_id'");

    // Redirect to homepage to display updated genre in list
    header("Location: index.php");
}
?>
<?php
// Display selected genre data based on id
// Getting id from url
$genre_id = $_GET['genre_id'];

// Fetch genre data based on id
$result = mysqli_query($conn, "SELECT * FROM genre WHERE genre_id='$genre_id'");

while ($genre = mysqli_fetch_array($result)) {
    $name = $genre['genre_name'];
    $desc = $genre['genre_desc'];
}
?>

<html>

<head>
    <title> Edit Genre Data </title>
</head>

<body>

    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_genre" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="author_desc" value=<?php echo $desc; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="genre_id" value=<?php echo $_GET['genre_id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>