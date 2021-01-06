<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "youtubeuserdata";

$con = mysqli_connect($server, $username, $password, $db);

mysqli_select_db($con, 'youtubeuserdata');

// if(isset($_POST['submit'])){ here we used form action which said automatically that when you click on the submit button it will submit the form directly
    $name = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];


    $insertQuery= "INSERT INTO `userinfodata` (`ID`, `username`, `email`, `Mobile`, `comments`) VALUES ( null, '$name', '$email', '$mobile', '$comments')";

    mysqli_query($con, $insertQuery);

    header('location:index.php');


?>