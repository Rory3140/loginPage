<!DOCTYPE html>
<html lang="en" style>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="POST">
            <label for="username">username</label>
            <input class="textbox" type="text" name="username" required>
            <label for="password">password</label>
            <input class="textbox" type="password" name="password" required>
            <input class="button" type="submit" name="submitBtn" value="login">
            <label for="submitBtn">don't have an account? <a href="signup.php">Sign Up</a></label>
        </form>
    </div>
</body>

</html>