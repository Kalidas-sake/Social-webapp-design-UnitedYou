<?php
/**
 * Created by PhpStorm.
 * User: Kalidas Sake
 * Date: 20-01-2018
 * Time: 17:58
 */

session_start();
if(isset($_SESSION['username'])){
echo " Hi ". $_SESSION['username']." welcome to friendsbook main page";
echo '<br/><a href="login.php?action=logout">logout</a>';
}
else{
    echo "Your session is expired or login first";
    echo '<br/>click<a href="login.php"> here </a>for login.';
    exit();
}
?>

<html>
<head>
    <title>Friendsbook Home</title>
    <style>
        .home-div{
            float: right;
            display: none;
        }

        .profile-div{
            float: right;
            
        }
    </style>
</head>
<body>
    <h2>Site under construction!</h2>
    <?php
    require_once 'header.php';
    ?>
    <div class="home-div">
        <?php
        include_once 'home.php';
        ?>
    </div>

    <div class="profile-div">
        <?php
        include_once 'profile.php';
        ?>
    </div>


</body>
</html>

