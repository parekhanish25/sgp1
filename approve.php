<?php
include("conn/conn.php");
if($_GET['id'])
{
    $id= $_GET['id'];

    $sql = "UPDATE mentor SET approve =1 WHERE Id=$id";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
      header("location:admin.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }

}
?>