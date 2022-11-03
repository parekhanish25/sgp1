<?php
include("conn/conn.php");
$sql="select * from mentor";
$result = $conn->query($sql);
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <style>
        input{
    border: 2px solid rgb(20, 20, 20);
    border-radius: 15px;
    font-size: 25px;
    width: 75%;
    margin: 10px; 
    padding: 3px;
}
body{
    font-family: 'Lemonada', cursive;
}  td,th{
    
    padding:10px;
  }  
table {
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
  border-collapse: collapse;
}
u { 
    height:1.5px;border-width:0;color:green;
}
    </style>
<table  width="45%">
<thead>
    <tr>
      <th><u>Id</u></th>
      <th><u>First Name</u></th>
      <th><u>Last Name</u></th>
      <th><u>Approve</u></th>
    </tr>
  </thead>
  <tbody>
<?php

if ($result->num_rows > 0)
 {
   while( $row = $result->fetch_assoc())
   {

    ?>

<tr>
    <td><?= $row['Id']?></td>
    <td><?= $row['f_name']?></td>
    <td><?= $row['l_name']?></td>
 

    <?php
        if($row['approve']==0)
        {
            $id=$row['Id'];
        
    ?>


        <td><a href="approve.php?id=<?= $row['Id']?>" class="btn btn-primary">not approved </a></td>
      
    
        <?php 
        }
        else
        {

            ?>


       <td><a  class="btn btn-primary"> approved </a></td>
      
    
        <?php 
        }
        ?>
         </tr>
        <?php
    }
}
else
{
    ?>
    <tr>
    <th>No record found</th>
  </tr>
    <?php
}
?>
  </tbody>
</table>

<?php
?>