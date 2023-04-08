<?php
// Include the database connection file
include_once("config.php");
// Fetch all data from the book table
$result = mysqli_query($conn, "SELECT * FROM books");

?>
<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <!-- Add new book link -->
    <a href="add.php">Add New Book</a><br /><br />

    <table border=1>
        <tr>
            <th>Book ID</th>
            <th>Picture ID</th>
            <th>Title ID</th>
            <th>Synopsis ID</th>
            <th>Author ID</th>
            <th>Genre ID</th>
            <th>Publisher ID</th>
            <th>Action</th>
        </tr>

        <?php
        // Loop through the data from the book table and display them in a table
        while ($book = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $book['book_id'] . "</td>";
            echo "<td>" . $book['pic_id'] . "</td>";
            echo "<td>" . $book['title_id'] . "</td>";
            echo "<td>" . $book['synopsis_id'] . "</td>";
            echo "<td>" . $book['author_id'] . "</td>";
            echo "<td>" . $book['genre_id'] . "</td>";
            echo "<td>" . $book['publisher_id'] . "</td>";
            // Add edit and delete links with the book_id as a parameter
            echo "<td><a href='edit.php?book_id=$book[book_id]'>Edit</a> | 
            <a href='delete.php?book_id=$book[book_id]'>Delete</a></td></tr>";
        }
        ?>

    </table>
</body>

</html>