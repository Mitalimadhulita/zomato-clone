<?php
// $name = $_REQUEST['name'];
// $email = $_REQUEST['email'];

// echo "Welcome " . $name . "<br>";
// echo "Your email is: " . $email;
// print_r($_POST['name']);
// print_r($_POST['email']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        echo "Name is required";
    } else {
        $name = $_POST["name"];
        echo "Hello " . $name;
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        echo "Hello " . $email;
    }

}
?>
