<?php
$flag = 0;
session_start();
include "loginserv.php";
?>








<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
<div class="main">

    <h1>Welcome to <i class="fab fa-facebook-f"></i>RIENDSBOOK</h1>

    <div class="loginb">
        <img src="img/avatar.jpg" class="avatar">
        <h2>Login Here</h2>
        <form method="POST" action="">
            <label><i class="fa fa-user"></i> Username</label><br/>
            <input type="text" id = "user" name="user" placeholder="Enter Username"><br/>
            <label><i class="fa fa-key"></i> Password</label><br/>
            <input type="password" id="pass" name="pass" placeholder="Enter Password"><br/>
            <span><small><?php echo $error ?></small><br/></span>
            <input type="submit" name="submit" value="Login" >
            <input type="button" name="signup" onclick="location.href='register.php?action=sign_up'" value="Sign Up"><br/>
            <a href="#">forgot password?</a><br>

        </form>
    </div>

    <div id="img-div1">
        <figure>
            <img src="img/info.png" id="img1" width="250px" height="150px">
            <figcaption>"Nothing makes the earth seem so <br/>
                    spacious as to have friends at a <br/>
                    distance; they make the latitudes <br/>
                    and longitudes."<br/>
                -Henry David Thoreau</figcaption>

        </figure>
    </div>

    <div id="img-div2">
        <figure>
            <img src="img/info2.png" id="img2" width="250px" height="150px">
            <figcaption>"Nothing makes the earth seem so <br/>
                spacious as to have friends at a <br/>
                distance; they make the latitudes <br/>
                and longitudes."<br/>
                -Henry David Thoreau</figcaption>
        </figure>
    </div>



</div>

<?php
include_once("footer.php");
?>

<!--Script to show and hide login frame -->
<!--
<script>
    function myFunction() {
        var x = document.getElementById("logindiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>  -->
</body>
</html>
