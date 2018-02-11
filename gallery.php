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


<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Choose Image Files: <input type="file" name="image[]" multiple>
        <input type="submit" name="upload" value="Show">
    </form>
    <?php
        if(isset($_POST['upload'])){

            for($i=0; $i<count($_FILES['image']['name']); $i++) {
                $filename = $_FILES['image']['name'][$i];
                $filesize = $_FILES['image']['size'][$i];
                $filetype = $_FILES['image']['type'][$i];
                $filetmpname = $_FILES['image']['tmp_name'][$i];

                $allowed_type = array("image/jpeg", "image/jpg", "image/png");
                if (in_array($filetype, $allowed_type)) {
                    if (move_uploaded_file($filetmpname, "uploads/$filename")) {

                        ?>
                        <img src="<?php echo 'uploads/' . $filename ?>" width="50%" height="50%" style="float: left">
                        <?php
                    } else {
                        echo "Error in opening file";
                    }
                }
            }
        }
    ?>

</body>
</html>
