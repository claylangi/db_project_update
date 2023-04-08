<?php
// include database connection file
include_once("config.php");

// check if form is submitted for rating update, then redirect to homepage after update
if(isset ($_POST ['update']))
{
    $rating_id =$_POST['rating_id'];
    $value = $_POST['value'];

    // update rating data
    $result = mysqli_query($conn, "UPDATE Ratings SET value='$value' WHERE rating_id='$rating_id'");
    
    // Redirect to homepage to display updated rating in list
    header("Location: index.php");
}
?>
<?php
// Display selected rating data based on id
// Getting id from url
$rating_id =$_GET['rating_id'];

// Fetech rating data based on id
$result = mysqli_query($conn, "SELECT * FROM Ratings WHERE rating_id='$rating_id'");

while($rating = mysqli_fetch_array($result))
{
    $value = $rating['value'];
}
?>
<html>
<head>
    <title> Edit Rating Data </title>
</head>
<body>
php
Copy code
<a href="index.php">Home</a>
<br/><br/>

<form name="update rating" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Value</td>
            <td><input type="text" name="value" value=<?php echo $value;?>></td>
        </tr>
        <tr>
        <td><input type="hidden" name="rating_id" value=<?php echo $_GET['rating_id'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>