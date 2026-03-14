<!DOCTYPE html>
<html>
<head>
    <title>Google Search Clone</title>
    <style>
        body{
            text-align:center;
            font-family: Arial, sans-serif;
            margin-top:150px;
        }
        input[type="text"]{
            width:400px;
            padding:10px;
            border-radius:25px;
            border:1px solid #ccc;
            outline:none;
        }
        input[type="submit"]{
            padding:8px 20px;
            margin-top:20px;
            border:none;
            background-color:#4285F4;
            color:white;
            border-radius:4px;
            cursor:pointer;
        }
        input[type="submit"]:hover{
            background-color:#357ae8;
        }
        img{
            width:200px;
        }
    </style>
</head>
<body>

    <!-- Google Logo -->
    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">

    <form method="GET" action="">
        <br><br>
        <input type="text" name="search" placeholder="Search Google..." required>
        <br>
        <input type="submit" name="submit" value="Google Search">
    </form>

<?php
if(isset($_GET['submit'])){
    $search = $_GET['search'];
    $search = urlencode($search);
    header("Location: https://www.google.com/search?q=$search");
    exit();
}
?>

</body>
</html>