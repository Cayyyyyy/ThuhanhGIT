<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý login</title>
</head>
<body>
<?php 
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $repassword = $_POST ['repassword'];
    $gioitinh = $_POST ['gioitinh'];
    $ngaysinh = $_POST ['ngaysinh'];
    $avatar = $_POST ['avatar'];
    $sothich = $_POST ['sothich'];
    // $hobby = "";
    // //var_dump($sothich);
    // foreach ($sothich as $value){
    //     $hobby = $hobby.' _ '.$value;
    // }
    // echo ' h: '.$hobby;
    // //die();
    // $diachi = $_POST ['diachi'];

    echo 'username: '.$username.'<br>';
    echo 'password: '.$password.'<br>';
    echo 'repassword: '.$repassword.'<br>';
    echo 'gioitinh: '.$gioitinh.'<br>';
    echo 'ngaysinh: '.$ngaysinh.'<br>';
     echo 'avatar: '.$avatar.'<br>';
    echo 'sothich: '.'<br>';
    var_dump($sothich);


    // upload file

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
            //    echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
             //   echo "File is not an image.";
                $uploadOk = 0;
            }
            }
            
            // Check if file already exists
            // if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            // $uploadOk = 0;
            // }
            
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000000) {
            //echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            // $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
            }
        $duongdanfile = "http://localhost/dangnhap/uploads/". basename( $_FILES["fileToUpload"]["name"]);
        echo  '<br> duongdanfile: ' .$duongdanfile;
        echo '<img src="'.$duongdanfile. '" alt="">';

    //end upfie

        $avatar = $duongdanfile;


        //thực hiện insert db (test kết nối trước)
        
        // //1. mở lien kết db
        // $servername = "localhost";
        // $username_sql = "root";
        // $password_sql = "";
        // $dbname = "phpl02";

        // // Create connection
        // $conn = new mysqli($servername, $username_sql, $password_sql, $dbname);
        // mysqli_query($conn,"SET CHARACTER SET 'utf8'");

        // // Check connection
        // if ($conn->connect_error) {
        // die("Connection failed: " . mysqli->connect_error);
        // }
        // //echo "Connected successfully2";
        // //2.tạo truy vấn sql
        // $sql = "INSERT INTO users (username,password,repassword,sex,birthday,address,hobby,avatar)
        // VALUES ('$username', '$password', '$repassword','$gioitinh','$ngaysinh','$diachi','$sothich','$avatar')";

        // if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }

        // mysqli_close($conn);
        // //3. thực hiện insert

    ?>
</body>
</html>