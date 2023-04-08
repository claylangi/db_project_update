<?php
// Check If form submitted, insert form data into student table.
if (isset($_POST['Submit'])) {

    $name = $_POST['name'];

    // include database connection file
    include_once("config.php");

    // Insert student data into table
    $result = mysqli_query($conn, "INSERT INTO title ( title_name)
    VALUES ( '$name')");

    // Show message when student added
    echo "Title added successfully. <a href='index.php'> View Titles</a><br><br>";
}
?>

<html>

<head>
    <title>Add Title</title>
</head>

<body>
    <a href="index.php">Go to Home </a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Name</td>
                <td><input type="text" name="name"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" Value="Add"> </td>
            </tr>
        </table>
    </form>
</body>

</html>