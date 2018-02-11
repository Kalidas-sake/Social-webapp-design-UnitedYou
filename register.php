<?php
$flag = 0;
$errmsg = "";
if($_GET['action'] === 'sign_up') {
    if (isset($_POST['signup'])) {
        $nuser = $_POST['user'];
        $npass = $_POST['pass'];
        $phone = $_POST['phone'];

        /* Phone number validation before entering into database*/
        if (preg_match("/^[0-9]{10}$/", $phone)) {
            // $phone is valid
            $flag = 1;
        }
        else{
            $flag = 0;
        }


        if (empty($npass) && empty($npass) && empty($phone)) {
            $errmsg = "Please inter the information";
        } else if ($flag === 1) {
            include("connection.php");
            $sql = "INSERT INTO userdata VALUES (NULL, '$nuser', '$npass', '$phone', null)";
            if ($conn->query($sql) == TRUE) {
                $errmsg = "success";
            } else {
                $errmsg = "Query not success";
            }
            $conn->close();
        } else {
            //$errmsg = "Username is already exist";
            $errmsg = 'Enter valid phone number';
        }
    }
}
else{
    echo $_GET['action'];
    header("location:index.php");
}
require_once 'register.html';

