<?php
// Check If form submitted, insert form data into author table.
if (isset($_POST['Submit'])) {

    $name = $_POST['name'];
    $desc = $_POST['author_desc'];

    // include database connection file
    include_once("config.php");

    // Insert author data into table
    $result = mysqli_query($conn, "INSERT INTO authors ( author_name, author_desc)
    VALUES ( '$name','$desc')");

    // Show message when author added
    echo "Author added successfully. <a href= 'index.php'> View Author</a><br><br>";
}
?>

<html>

<head>
    <title>Add Author</title>
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
                <td><input type="text" name="author_desc"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" Value="Add"> </td>
            </tr>
        </table>
    </form>
</body>

</html>