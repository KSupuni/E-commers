<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login Page</title>
</head>
<body>
    <div class="Loginbox">
        <form method="post" action="conn.php">
            <h1>Login Here</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input type="submit" name="submit" value="Login"><br><br>
            <a href="#">Lost your password?</a><br><br>
            
            <a href="register.php">Don't have an account? Register here</a>
        </form>
    </div>
</body>
</html>
