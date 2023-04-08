<?php
// Check if the form is submitted, then insert form data into book table
if (isset($_POST['Submit'])) {


    $pic_id = $_POST['pic_id'];
    $title_id = $_POST['title_id'];
    $synopsis_id = $_POST['synopsis_id'];
    $author_id = $_POST['author_id'];
    $genre_id = $_POST['genre_id'];
    $publisher_id = $_POST['publisher_id'];

    // include database connection file
    include_once("config.php");

    // Insert data into the book table
    $result = mysqli_query($conn, "INSERT INTO books (  pic_id, title_id, synopsis_id, author_id, genre_id, publisher_id) 
    VALUES ( '$pic_id', '$title_id', '$synopsis_id', '$author_id', '$genre_id', '$publisher_id')");

    // Show message when book added
    echo "Book added successfully. <a href='index.php'>View Books</a><br><br>";
}
?>
<html>

<head>
    <title>Add Book</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">


            <tr>
                <td>Pic ID</td>
                <td><input type="text" name="pic_id"></td>
            </tr>
            <tr>
                <td>Title ID</td>
                <td><input type="text" name="title_id"></td>
            </tr>
            <tr>
                <td>Synopsis ID</td>
                <td><input type="text" name="synopsis_id"></td>
            </tr>
            <tr>
                <td>Author ID</td>
                <td><input type="text" name="author_id"></td>
            </tr>
            <tr>
                <td>Genre ID</td>
                <td><input type="text" name="genre_id"></td>
            </tr>
            <tr>
                <td>Publisher ID</td>
                <td><input type="text" name="publisher_id"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" Value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>