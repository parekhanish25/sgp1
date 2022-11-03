<?php
 include("conn/conn.php"); 
error_reporting(0);
    $Get_image_name = $_FILES['image']['name'];
    // image Path
    $image_Path = "profile/".basename($Get_image_name);
    //echo $image_Path;
   if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
        //echo "Your Image uploaded successfully";
    }else{
        echo  "Not Insert Image";
    }

    $a = $_POST['fname'];
    $b = $_POST['lname'];
    $c = $_POST['Qualification'];
    $d = $_POST['interest'];
    $e = $_POST['Email'];
    $f = $_POST['linkedin'];
    $g = $_POST['Password'];


    $sql = "INSERT INTO `mentor`( `f_name`, `l_name`, `img`, `detail`, `email`, `area_of_interest`, `linkedin_url`,`pss`) 
    VALUES ('$a','$b','$image_Path','$c','$e','$d','$f','$g')";
if ($conn->query($sql) === TRUE) {
  header("location:mlogin.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    $conn->close();

?>