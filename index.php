<?php
session_start();
if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $valid_username = 'admin';
  $valid_password = 'password';
  if($username == $valid_username && $password == $valid_password){
    $_SESSION['login'] = 'true';
    echo "Login Successful";
  }else{
    echo "Invalide details";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=100, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method='post'>
    Username:  <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="Login" value="Login">
  </form>
</body>
</html>