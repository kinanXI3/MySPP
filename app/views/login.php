<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <center>
    <h1>Selamat Datang di MySPP</h1>
    <form action="<?= urlTo('login/login'); ?>" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id ="username" ></input><br> 

        <label for="password">Password :</label>
        <input type="password" name="password" id ="password"></label><br>

        <label for="remember">Remember Me</label>
        <input type="checkbox" name="remember"><br>

        <button type="submit">Login</button>
    </form>
  </center>  
</body>
</html>