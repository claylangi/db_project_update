<?php
// include database connection file
include_once("config.php");

// check if form is submitted for review update, then redirect to homepage after update
if(isset ($_POST ['update']))
{
    $review_id = $_POST['review_id'];
    $book_id = $_POST['book_id'];
    $user_id = $_POST['user_id'];
    $rating_id = $_POST['rating_id'];
    $comment = $_POST['comment'];

    // update review data
    $result = mysqli_query($conn, "UPDATE Reviews
    SET book_id='$book_id', user_id='$user_id', rating_id='$rating_id', comment='$comment' WHERE review_id='$review_id'");
    
    // Redirect to homepage to display updated review in list
    header("Location: index.php");
}

?>
<?php
// Display selected review data based on id
// Getting id from url
$review_id = $_GET['review_id'];

// Fetch review data based on id
$result = mysqli_query($conn, "SELECT * FROM Reviews WHERE review_id='$review_id'");

while($review = mysqli_fetch_array($result))
{
    $book_id = $review['book_id'];
    $user_id = $review['user_id'];
    $rating_id = $review['rating_id'];
    $comment = $review['comment'];
}
?>
<html>
<head>
    <title> Edit Review Data </title>
</head>
<body>
php
Copy code
<a href="index.php">Home</a>
<br/><br/>

<form name="update review" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Book ID</td>
            <td><input type="text" name="book_id" value="<?php echo $book_id; ?>"></td>
        </tr>
        <tr>
            <td>User ID</td>
            <td><input type="text" name="user_id" value="<?php echo $user_id; ?>"></td>
        </tr>
        <tr>
            <td>Rating ID</td>
            <td><input type="text" name="rating_id" value="<?php echo $rating_id; ?>"></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><textarea name="comment"><?php echo $comment; ?></textarea></td>
        </tr>
        <tr>
            <td><input type="hidden" name="review_id" value="<?php echo $_GET['review_id']; ?>"></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>