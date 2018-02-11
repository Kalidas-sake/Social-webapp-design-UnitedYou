<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h2>Showing photos of ".$_SESSION['username']."</h2>";
}
else{
    echo "Your session is expired or login first";
    echo '<br/>click<a href="login.php"> here </a>for login.';
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Friendsbook Home</title>
</head>
<body>
<div>
    <h2>Showing your profile</h2>
    <img src="img"
</div>
</body>
</html>