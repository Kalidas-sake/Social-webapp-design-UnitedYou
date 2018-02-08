<?php
$error = ''; //variable to store error msg
if (isset($_GET['action'])) {
    echo "log out success";
    session_unset();
}


if(isset($_SESSION['username'])) {
    header("location:main.php");
}
else{
    if (isset($_POST['submit'])) {
        if (empty($_POST['user']) || empty($_POST['pass'])) {
            $error = "Username or Password is empty";
        } else {
            //define username and password
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            //Establishing the connection with database
            include("connection.php");

            //sql query to fetch information
            $query = mysqli_query($conn, "SELECT * FROM userdata WHERE user = '$user' AND pass = '$pass'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                $_SESSION['username'] = $user;
                header("location:main.php"); //Redirecting to other page
            } else {
                $error = "Username or password invalid ";
            }
            echo "sql connection closed";
            mysqli_close($conn); //closing mysql connection
        }
    }
}
