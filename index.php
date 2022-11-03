<?php include("conn/conn.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
           I mentor
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <a href="#" class="logo"><span><big>i</big></span> Mentor<span>.</span></a>
            <ul class="navigation">
                <li><a href="#index"><big>Home</big></a></li>
                <li><a href="#about"><big>About</big></a></li>
                <li><a href="#faculty"><big>Mentor</big></a></li>
                <li><a href="#login"><a href="mlogin.html"><big>Login as Mentor</a></big></a></li>
            </ul>
        </header>
        <section class="index" id="index">
            <div class="first">
                <h2>Always Choose Best</h2>
                <p class="firstp">
                    <span>We provide you best education for future.</span>
                </p>
            </div>
        </section>
        <section class="about" id="about">
            <div class="second">
                <div class="second1">
                    <h2 class="secondh"><span>W</span><big>H</big><big>Y<span> U</span></big><big>S</big><big>?</big></h2>
                    <p>
                        Mentors offer invaluable tacit knowledge and guidance.
                        Mentors expand your network and open up doors to new opportunities.
                        Mentors develop your leadership skills.
                        Mentors hold you accountable to achieve your goals.
                    </p>
                    <br><br>
                    <p>
                     It’s no secret that receiving feedback is hard. And determining whether or not the person giving the feedback has your best interests in mind can lead to confusion.
                     For that reason, having a mentor who’s both an objective third party and an advocate for your growth and development is crucial       
                    </p>
                </div>
                <div class="second1">
                    <div class="secondi">
                        <img src="index background image.jpg">
                    </div>
                </div>
            </div>
        </section>
        <br> 
        <section class="faculty" id="faculty">
            <div class="title">
                <h2 class="secondh"><big>O</big>ur <big>M</big>entor <span>T</span>eam</h2>
            </div>
            <div class="content">
            <?php
                    $sql = "SELECT *  FROM mentor";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    if($row['approve']==1)
                    {
                    ?>
                    <div class="box">
                    <div class="secondi">
                        <img src="<?= $row['img']?>">
                    </div>
                    <div class="text">
                            <span class="facultyname"><a href="mentor1.php?code=<?= $row['Id']?>"><?= $row['f_name']?> <?= $row['l_name']?></a></span>
                            <br>
                            <?= $row['detail']?>
                    </div>
                </div>
                    <?php
                    }
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
            ?>
                </div>                
        </section>
<hr>
<section class="student">
            <div class="title">
                <h2 class="secondh"><big>O</big>ur <span>T</span>estimonials</h2>
                        <p style="color:white">Working with Summit has been
                            the best investment for GATE prep and academic
                            tutoring for our family. The team is professional,
                            competent, responsive and most importantly, the
                            tutors really connected with our sons and
                            encouraged them to succeed for themselves.We were delighted with Summit,
                            from the free practice GATE tests which they
                            offer, to the incredibly thorough free consult
                            afterward, to their steadfast help through the
                            pandemic and their fantastic tutors. My daughter had a
                            wonderful tutor. They really connected, and she had
                            a lot of fun while learning great strategies.
                            Communication was fantastic, and I have never seen
                            her so motivated. She was very happy with her first
                            We had great support from Summit as we went through the colleqe testing
                            process. My daughter was able to take as many
                           practice tests as she wanted and was matched with
                            an incredible tutor who was not only very skilled but
                            warm and encouraging.</p> 
            </div>
        </section>
        <footer>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            footer
            {
                background-color: rgba(0, 0, 0, 0.822);

            }
            .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}
/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* google */
.fa-google {
  color: white;
}
/* instagram */
.fa-instagram 
{
  color: white;
}
       /*.fa {
        background:black;
  padding: 20px;
  font-size: 30px;
  width: 30px;
  align:center;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}*/
</style>
<center><a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
</center>
            </footer>
    </body>
</html>
