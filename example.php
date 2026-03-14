;<!DOCTYPE html>
<html>
<body>

<!-- <form method="POST" action="process.php">
  Name: <input type="text" name="name">
  <br><br>
  Email: <input type="email" name="email">
  <br><br>
  <input type="submit" value="Submit">
</form> -->
<?php
$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    }
}
?>

<form method="POST" action="">
  Name: <input type="text" name="name" required>
  <span><?php echo $nameErr; ?></span>
  <br><br>

  Email: <input type="text" name="email">
  <span><?php echo $emailErr; ?></span>
  <br><br>

  <input type="submit">
</form>

</body>
</html>