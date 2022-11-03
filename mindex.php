<?php include("conn/conn.php");
session_start();
error_reporting(0);
if($_POST['submit'])
{
    $h=$_POST['link'];
    $new_sentence = str_replace("'", '"', $h);
    $id=$_SESSION['Id'];
    $sql = "UPDATE mentor SET appoinment_code ='$new_sentence' WHERE Id=$id";
    // echo $sql;
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close(); 
}
else
{
    $id=$_SESSION['Id'];
    $sql = "SELECT approve from mentor  WHERE Id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row['approve']==0)
        {
           echo "Wait for Approval";   
        }
        else
        {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
            <!DOCTYPE html>
            <html lang="en">
            
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!--title>image Upload with Preview</title!-->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                </head>
            
                <body>
                    <form action="mindex.php" method="post" >
                    <div class="container col-md-6">
                        <div class="mb-5">
                            <label for="fname">calander link</label><br>
                    <input type="text" class="form-control" id="fname" name="link"  placeholder="Your calander link"  required><br>
                    <input type="submit" name="submit" value="submit">
                        </div>
                    </div>
                    </form>
                </body>
            </html>
            </body>
            </html>
            <?php
        }
    } 
    else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close(); 
    ?>
    <?php
}
?>