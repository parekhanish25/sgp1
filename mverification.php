<?php include("conn/conn.php"); 

    $a= $_POST['Email'];
    $b= $_POST['Password'];
    $sql = "SELECT *  FROM mentor where email='$a' and pss=$b";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "done";
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['Id']=$row['Id'];
        header("location:mindex.php");
    }
?>