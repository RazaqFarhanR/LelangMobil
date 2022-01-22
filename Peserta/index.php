<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
</head>
<body class="text-center">
  <div class="loginbox"> 
    <img src="https://i.imgur.com/ZYzTdD0.png" class="avatar">
    <h1>User<br>Login</h1>
    <form action="proses_login.php" method="POST">
        <p>Username</p> 
        <input type="text" name="username" placeholder="Enter Username" required>
        <p>Password</p> 
        <input type="password" name="password" placeholder="Enter Password" required> 
        <input type="submit" value="Login">
        <a href="register.php">Don't have an account?</a>
    </form>
  </div>
</body>
</html>
