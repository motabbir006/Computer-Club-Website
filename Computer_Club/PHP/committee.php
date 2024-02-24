<?php
require_once('../connection/db.php');
$row1 = "SELECT * FROM r1 ORDER BY id DESC LIMIT 1";
$result1 = mysqli_query($con, $row1);

$row2 = "SELECT * FROM r2 ORDER BY id DESC LIMIT 1";
$result2 = mysqli_query($con, $row2);

$row3 = "SELECT * FROM r3 ORDER BY id DESC LIMIT 1";
$result3 = mysqli_query($con, $row3);

$row4 = "SELECT * FROM r4 ORDER BY id DESC LIMIT 1";
$result4 = mysqli_query($con, $row4);

$row5 = "SELECT * FROM r5 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($con, $row5);

$row6 = "SELECT * FROM r6 ORDER BY id DESC LIMIT 1";
$result6 = mysqli_query($con, $row6);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="all_h">
        <section id="header">
            <a href="#"><img src="../images/FINAL NBIU.png" alt="" class="logo"> </a>

            <div>
                <ul id="navbar">
                    <li><a href="sourov.php">HOME</a></li>
                    <li><a href="../Html/contact.html">CONTACT</a></li>
                    <li><a class="active1" href="committee.php">COMMITTEE </a></li>
                    <li><a href="../Html/about.html">ABOUT</a></li>
                    <li><a href="home_event.php">EVENT</a></li>
                    <li><a href="../Html/join us.html">JOIN US</a></li>
                    <a href="#" id="close"> <i class="fa fa-times"></i></a>
                </ul>

            </div>
            <div id="mobile">
                <i id="bar" class="fa fa-outdent "></i>
            </div>
        </section>

        <div class="committee">
            <img src="../images/committee.jpg" class="com_image">

            <div class="com1">

                <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                    <div class="imgBx">
                        <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">

                    </div>
                    <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                <?php } ?>
            </div>



            <div class="com2">

                <div class="com1" id="com22">
                    <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                        <div class="imgBx">
                            <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">
                        </div>
                        <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                    <?php } ?>
                </div>



                <div class="com1" id="com22">
                    <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                        <div class="imgBx">
                            <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">
                        </div>
                        <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                    <?php } ?>
                </div>
            </div>

            <div class="com3">
                <div class="com1" id="com22">
                    <?php while ($row = mysqli_fetch_assoc($result4)) { ?>
                        <div class="imgBx">
                            <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">
                        </div>
                        <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                    <?php } ?>
                </div>

                <div class="com1" id="com22">
                    <?php while ($row = mysqli_fetch_assoc($result5)) { ?>
                        <div class="imgBx">
                            <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">
                        </div>
                        <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                    <?php } ?>
                </div>

                <div class="com1" id="com22">
                    <?php while ($row = mysqli_fetch_assoc($result6)) { ?>
                        <div class="imgBx">
                            <img src="../admin/PHP/upload/<?php echo $row['image_path']; ?>" alt="Img">
                        </div>
                        <h2><?php echo $row['name']; ?><br> <span><?php echo $row['position']; ?></span>
                    <br> <span style="text-align:justify;"> <?php echo $row['description']; ?></span></h2>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-----footer-->
    
        <footer class="section-p1">
            <div class="col">
                <h4>Campus</h4>
                <p><i class='fa fa-institution' id="ad1"></i> Chowddopai, Natore Road,<br>Motihar, Rajshahi, Bangladesh
                </p>
                <p><i class="fa fa-phone-square" id="ad1"></i> +8880 1788 107942 </p>
                <p><i class="fa fa-envelope" id="ad1"></i> sourov00p@gmail.com </p>
                <p> <i class="fa fa-clock-o" id="ad1"></i> 10:00 - 18:00 Mon- Sat</p>
            </div>

            <div class="col">

            <div class="col1" style="margin: 0px 20px;">
                <h4>About US</h4>
                <div class="text">

                    Where tech passion thrives,skills <br>
                    blossom, and friendships spark in <br>
                    a supportive community.

                </div>
                </div>
            </div>

            <div class="col">

                <h4>Important Links</h4>
                <a href="../Html/contact.html"> <i class='fa fa-arrow-right' id="ad1"></i> Contact</a>
                <a href="../Html/join us.html"> <i class='fa fa-arrow-right' id="ad1"></i>Membership from</a>
                <a href="sourov.php"> <i class='fa fa-arrow-right' id="ad1"></i>Notice board</a>
                <a href="committee.php"> <i class='fa fa-arrow-right' id="ad1"></i>COMMITTEE</a>
            </div>

            <div class="col">

                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa fa-facebook-square" id="social"></i>
                    <i class="fa fa-skype" id="social"></i>
                    <i class="fa fa-instagram" id="social"></i>
                    <i class="fa fa-youtube" id="social"></i>
                </div>
            </div>
        </footer>
        <div class="copyright">

            <p>Copyright © 2013 NBIU. All rights reserved. </p>
            <p>Developed by sourov & Mahfuz</p>
        </div>
        </div>
        <script src="../JS/script.js"></script>
</body>

</html>