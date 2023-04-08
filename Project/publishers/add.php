<?php
// Check If form submitted, insert form data into student table.
if (isset($_POST['Submit'])) {

    $name = $_POST['name'];
    $desc = $_POST['publisher_desc'];

    // include database connection file
    include_once("config.php");

    // Insert publisher data into table
    $result = mysqli_query($conn, "INSERT INTO publishers ( publisher_name, publisher_desc)
    VALUES ( '$name','$desc')");

    // Show message when publisher added
    echo "Publisher added successfully. <a href='index.php'> View Publishers</a><br><br>";
}
?>

<html>

<head>
    <title>Add Publisher</title>
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
                <td>Description</td>
                <td><input type="text" name="publisher_desc"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" Value="Add"> </td>
            </tr>
        </table>
    </form>
</body>

</html>