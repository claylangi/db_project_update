<?php
// include database connection file
include_once("config.php");

// check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $title_id = $_POST['title_id'];
    $name = $_POST['name'];

    // update title data
    $result = mysqli_query($conn, "UPDATE title SET title_name='$name' WHERE title_id='$title_id'");

    // Redirect to homepage to display updated title in list
    header("Location: index.php");
}
?>

<?php
// Display selected title data based on id
// Getting id from url
$title_id = $_GET['title_id'];

// Fetch title data based on id
$result = mysqli_query($conn, "SELECT * FROM title WHERE title_id='$title_id'");

while($title = mysqli_fetch_array($result))
{
    $name = $title['title_name'];
}
?>

<html>
<head>
    <title>Edit Title Data</title>
</head>
<body>

    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_title" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="title_id" value="<?php echo $_GET['title_id'];?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
