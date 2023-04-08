<?php
// include database connection file
include_once("config.php");

// check if form is submitted for book update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $book_id = $_POST['book_id'];
    $pic_id = $_POST['pic_id'];
    $title_id = $_POST['title_id'];
    $synopsis_id = $_POST['synopsis_id'];
    $author_id = $_POST['author_id'];
    $genre_id = $_POST['genre_id'];
    $publisher_id = $_POST['publisher_id'];

    // update book data
    $result = mysqli_query($conn, "UPDATE books
    SET pic_id='$pic_id' , SET title_id='$title_id' ,synopsis_id='$synopsis_id' ,author_id='$author_id', genre_id='$genre_id', publisher_id='$publisher_id' WHERE book_id='$book_id'");

    // Redirect to homepage to display updated book in list
    header("Location: index.php");
}
?>

<?php
// Display selected book data based on id
// Getting id from url
$book_id = $_GET['book_id'];

// Fetch book data based on id
$result = mysqli_query($conn, "SELECT * FROM books WHERE book_id='$book_id'");

while ($book = mysqli_fetch_array($result)) {
    $pic_id = $book['pic_id'];
    $title_id = $book['title_id'];
    $synopsis_id = $book['synopsis_id'];
    $author_id = $book['author_id'];
    $genre_id = $book['genre_id'];
    $publisher_id = $book['publisher_id'];
}
?>

<html>

<head>
    <title>Edit Book Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update book" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Picture ID</td>
                <td><input type="text" name="pic_id" value="<?php echo $pic_id; ?>"></td>
            </tr>
            <tr>
                <td>Title ID</td>
                <td><input type="text" name="title_id" value="<?php echo $title_id; ?>"></td>
            </tr>
            <tr>
                <td>Synopsis ID</td>
                <td><input type="text" name="synopsis_id" value="<?php echo $synopsis_id; ?>"></td>
            </tr>
            <tr>
                <td>Author ID</td>
                <td><input type="text" name="author_id" value="<?php echo $author_id; ?>"></td>
            </tr>
            <tr>
                <td>Genre ID</td>
                <td><input type="text" name="genre_id" value="<?php echo $genre_id; ?>"></td>
            </tr>
            <tr>
                <td>Publisher ID</td>
                <td><input type="text" name="publisher_id" value="<?php echo $publisher_id; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="book_id" value="<?php echo $_GET['book_id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>