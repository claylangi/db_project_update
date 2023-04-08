<?php
// Create database connection using config file
include_once("config.php");
// Fetch all users data from database and student table
$result = mysqli_query($conn, "SELECT pp.pic_link, b.book_id, t.title_name, s.synopsis_text, a.author_name, g.genre_name, pn.publisher_name
FROM books b
JOIN picture pp ON b.pic_id = pp.pic_id
JOIN title t ON b.title_id = t.title_id
JOIN synopsis s ON b.synopsis_id = s.synopsis_id
JOIN authors a ON b.author_id = a.author_id
JOIN genre g ON b.genre_id = g.genre_id
JOIN publishers pn ON b.publisher_id = pn.publisher_id");

?>


<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Add New Book</a><br /><br />
    <table border=1>
        <tr>
            <th>Book ID</th>
            <th>Picture</th>
            <th>Title</th>
            <th>Synopsis</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Publisher</th>
            <th>Action</th>
        </tr>
        <?php
        while ($books = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $books['book_id'] . "</td>";
            echo "<td><img src='/database/Project/gambar/" . $books['pic_link'] . "' width='100' height='150'></td>";
            echo "<td>" . $books['title_name'] . "</td>";
            echo "<td>" . $books['synopsis_text'] . "</td>";
            echo "<td>" . $books['author_name'] . "</td>";
            echo "<td>" . $books['genre_name'] . "</td>";
            echo "<td>" . $books['publisher_name'] . "</td>";
            echo "<td><a href='edit.php?book_id=$books[book_id]'>Edit</a> | 
                <a href='delete.php?book_id=$books[book_id]'>Delete</a></td></tr>";
        }

        ?>

    </table>
</body>

</html>