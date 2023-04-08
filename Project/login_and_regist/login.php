<!-- login.php -->
<html>

<head>
    <title> LOGIN PAGE </title>

</head>

<body>

    <h3> INPUT NAME AND EMAIL </h3>

    <form action="data.php" method="post">
        <table>
            <tr>
                <td width="120"> username </td>
                <td> <input type="text" name="username"> </td>
            </tr>
            <tr>
                <td> password </td>
                <td> <input type="text" name="password"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"> </td>
            </tr>
        </table>
    </form>
    <a href="register.php"> Register? </a>

</body>

</html>