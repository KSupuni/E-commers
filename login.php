<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link href="css/login-style.css" rel="stylesheet">
  </head>
  <body>
    <div class="center">
        <h1>Login</h1>
        <form method="post"action="LoginCustomer.php">
            <div class="text_field">
                <input type="text" required>
                <span></span>
                <label>username</label>
            </div>
            <div class="text_field">
                <input type="Password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="password">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="singnup_link"></div>
            I don't have account <button type="button"><span></span><a href="Register.html">Register</a></button>

 </form>

  </body>
</html>