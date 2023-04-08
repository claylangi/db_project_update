<?php
// include database connection file
include_once("config.php");

// check if form is submitted for user update, then redirect to homepage after update
if(isset ($_POST ['update']))
{
    $synopsis_id =$_POST['synopsis_id'];
    $synopsis = $_POST['synopsis'];

    // update user data
    $result = mysqli_query($conn, "UPDATE synopsis
    SET synopsis_text='$synopsis' WHERE synopsis_id='$synopsis_id'");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$synopsis_id =$_GET['synopsis_id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM synopsis WHERE synopsis_id='$synopsis_id'");

while($synopsis = mysqli_fetch_array($result))
{
    $synopsis = $synopsis['synopsis_text'];
}
?>

<html>
<head>
    <title> Edit Synopsis Data </title>
</head>
<body>

    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update synopsis" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Synopsis</td>
                <td><input type="text" name="synopsis" value=<?php echo $synopsis;?>></td>
            </tr>
            <tr>
            <td><input type="hidden" name="synopsis_id" value=<?php echo $_GET['synopsis_id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
