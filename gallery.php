<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Choose Image Files: <input type="file" name="image">
        <input type="submit" name="upload" value="Show">
    </form>
    <?php
        if(isset($_POST['upload'])){
            $filename = $_FILES['image']['name'];
            $filesize = $_FILES['image']['size'];
            $filetype = $_FILES['image']['type'];
            $filetmpname = $_FILES['image']['tmp_name'];

            $allowed_type = array("image/jpeg", "image/jpg", "image/png");
            if(in_array($filetype, $allowed_type)){
                if(move_uploaded_file($filetmpname, "uploads/$filename")){

                    ?>
                    <img src="<?php echo 'uploads/'.$filename?>" width="450px" height="300px" >
                    <?php
                }
                else{
                    echo "Error in opening file" ;
                }
            }

        }
    ?>

</body>
</html>
