<?php include("conn/conn.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        <?php
                $id = $_GET['code'];
                    $sql = "SELECT *  FROM mentor where Id=$id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo $row['f_name'];
                    echo $row['l_name'];
                    ?>  
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <a href="#" class="logo"><span><big>i</big></span> Mentor<span>.</span></a>
            <ul class="navigation">
                <li><a href="#index"><big><a href="index.php">Back to Home</a></big></big></a></li>
            </ul>
        </header>
        <section class="index" id="index">
            <div class="first">
                <!--h2>Dr. PARTH SHAH</h2!-->
                <?php
                $id = $_GET['code'];
                    $sql = "SELECT *  FROM mentor where Id=$id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    ?>
                <img src="<?= $row['img']?>" width="230" height="270" align="left" ></img>
                <p class="firstp" >
                    <span>
                        <p>Having 17+ years of experience in the tech industry.</p> 
                        <p>Conducted over 500+ interviews including Fortune 100 companies.</p>
                        <p>Conducted 100+ mock interviews for students just like you.</p>
                        <p>Experience in system design, behavioral, coding, and management interviews.</p>
                        <br><br>
                    </span>
                    <?php 
                    $id = $_GET['code'];
                    $sql = "SELECT *  FROM mentor where Id=$id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo $row['appoinment_code'];
                    ?>   
 </p>
</div>
</section>                         
 </section>
<hr> 
</body>
</html>
