<?php
// Cek jika formulir dikirim, masukkan data formulir ke dalam tabel Reviews.
if (isset($_POST['Submit'])) {

    $book_id = $_POST['book_id'];
    $user_id = $_POST['user_id'];
    $rating_id = $_POST['rating_id'];
    $comment = $_POST['comment'];
    $date_created = date("Y-m-d H:i:s");

    // termasuk file koneksi database
    include_once("config.php");

    // Masukkan data review ke dalam tabel
    $result = mysqli_query($conn, "INSERT INTO reviews ( book_id, user_id, rating_id, comment, date_created)
    VALUES ('$book_id','$user_id','$rating_id','$comment','$date_created')");

    // Tampilkan pesan saat review ditambahkan
    echo "Review berhasil ditambahkan. <a href= 'index.php'>Lihat Review</a><br><br>";
}
?>

<html>

<head>
    <title>Tambah Review</title>
</head>

<body>
    <a href="index.php">Kembali ke Beranda </a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">

            <tr>
                <td>Book ID</td>
                <td><input type="text" name="book_id"></td>
            </tr>
            <tr>
                <td>User ID</td>
                <td><input type="text" name="user_id"></td>
            </tr>
            <tr>
                <td>Rating ID</td>
                <td><input type="text" name="rating_id"></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><input type="text" name="comment"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan"></td>
            </tr>
        </table>
    </form>
</body>

</html>