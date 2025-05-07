<!DOCTYPE html>
<html>
<head>
    <title>Club Member Form</title>
    <link rel="stylesheet" href="cssform.css">
</head>
<body>
    <h2>Club Member Form</h2>
    <form action="phpform.php" method="post">
        <table border="1">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Number:</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
    <td>Select Clubs: maximum 2</td>
    <td>
        <input type="checkbox" name="club[]" value="music"> Music<br>
        <input type="checkbox" name="club[]" value="sports"> Sports<br>
        <input type="checkbox" name="club[]" value="arts"> Arts<br>
        <input type="checkbox" name="club[]" value="science"> Science
    </td>
</tr>
            <tr>
                <td>Membership Type:</td>
                <td>
                    <input type="radio" name="membership" value="normal"> Normal<br>
                    <input type="radio" name="membership" value="premium"> Premium<br>
                    <input type="radio" name="membership" value="vip"> VIP
                </td>
            </tr>
            <tr>
                <td>Do you like our form?</td>
                <td><input type="text" name="feedback"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>