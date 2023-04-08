<?php
// Check If form submitted, insert form data into course table.
if (isset($_POST['Submit'])) {

    $synopsis = $_POST['synopsis'];

    // include database connection file
    include_once("config.php");

    // Insert synopsis data into table
    $result = mysqli_query($conn, "INSERT INTO synopsis (synopsis_text)
    VALUES ('$synopsis')");

    // Show message when synopsis added
    echo "Synopsis added successfully. <a href= 'index.php'> View Synopsis</a><br><br>";
}
?>
<html>

<head>
    <title>Add Synopsis</title>
</head>

<body>
    <a href="index.php">Go to Home </a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Synopsis</td>
                <td><input type="text" name="synopsis"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" Value="Add"> </td>
            </tr>
        </table>
    </form>
</body>

</html>