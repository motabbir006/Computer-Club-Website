<?php

require_once('../connection/db.php');
$query = "SELECT * FROM latest_notice ORDER BY ID DESC LIMIT 6";
$result = mysqli_query($con, $query);
$qu = "SELECT * FROM upcoming_notice ORDER BY ID DESC LIMIT 6";
$re = mysqli_query($con, $qu);
$q = "SELECT * FROM event_notice ORDER BY ID DESC LIMIT 6";
$r = mysqli_query($con, $q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="all_h">
        <section id="header">
            <a href="#"><img src="../images/FINAL NBIU.png" alt="" class="logo"> </a>

            <div>
                <ul id="navbar">
                    <li><a class="active1" href="sourov.php">HOME</a></li>
                    <li><a href="../Html/contact.html">CONTACT</a></li>
                    <li><a href="committee.php">COMMITTEE </a></li>
                    <li><a href="../Html/about.html">ABOUT</a></li>
                    <li><a href="home_event.php">EVENT</a></li>
                    <li><a href="../Html/join us.html">JOIN US</a></li>
                    <a href="#" id="close"> <i class="fa fa-bars"></i></a>
                </ul>

            </div>
            <div id="mobile">
                <i id="bar" class="fa fa-bars"></i>
            </div>
        </section>

        <!-- Slider image-->


        <div class="Slider_Notice">

            <div class="slideshow-container">
                <div class="mySlides  fade">
                    <img class="slider_image" src="../images/slide02.jpg" alt="">


                </div>
                <div class="mySlides fade">
                    <img class="slider_image" src="../images/slide01.jpg" alt="">


                </div>

                <div class="mySlides fade">
                    <img class="slider_image" src="../images/slide03.jpg" alt="">


                </div>
                <a class="prev" onclick="plusSlides(-1)"> &#10094;</a>
                <a class="next" onclick="plusSlides(1)"> &#10095;</a>
            </div> <br>

        </div>

        <div class="dot_icons">
            <span class="dot" onclick="currentSlides(1)"> </span>
            <span class="dot" onclick="currentSlides(2)"> </span>
            <span class="dot" onclick="currentSlides(3)"> </span>

        </div>

        <!-- Notice slider-->
        <main class="section-p1">
            <div class="col2">
                <div class="latest-news">
                    <div class="heading-section">
                        <h3 class="head-title">Latest notice</h3>
                    </div>
                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start()">
                        <table class="t1">

                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                    <td class="tbdate"><?php echo $row['date']; ?></td>
                                    <?php $TITLE = $row['title'];
                                    $pageUrl = "latest_notice.php?title=$TITLE";
                                    echo "<td><a href='$pageUrl'>" . substr($TITLE, -600) . "</a></td>"; ?>
                            </tr>
                        <?php
                                }
                        ?>


                        </table>
                    </marquee>
                </div>
            </div>
            <div class="col2">
                <div class="latest-news">
                    <div class="heading-section">
                        <h3 class="head-title">Upcoming Notice</h3>
                    </div>
                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start()">
                        <table class="t1">

                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($re)) {
                                ?>
                                    <td class="tbdate"> <?php echo $row['date']; ?></td>

                                    <?php $TITLE = $row['title'];
                                    $pageUrl = "upcoming_notice.php?title=$TITLE";
                                    echo "<td><a href='$pageUrl'>" . substr($TITLE, -600) . "</a></td>"; ?>
                            </tr>
                        <?php
                                }
                        ?>


                        </table>

                    </marquee>
                </div>
            </div>
            <div class="col2">
                <div class="latest-news">
                    <div class="heading-section">
                        <h3 class="head-title"> Event Notice</h3>
                    </div>
                    <marquee direction="up" behaviour="slide" onmouseover="this.stop();" onmouseout="this.start()">
                        <table class="t1">

                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($r)) {
                                ?>
                                    <td class="tbdate"><?php echo $row['date']; ?></td>
                                    <?php $TITLE = $row['title'];
                                    $pageUrl = "event.php?title=$TITLE";
                                    echo "<td><a href='$pageUrl'>" . substr($TITLE, -600) . "</a></td>"; ?>
                            </tr>
                        <?php
                                }
                        ?>


                        </table>

                    </marquee>
                </div>
            </div>
        </main>


        <div class="container">
            <div class="heading">
                <h1>About us</h1>
            </div>
            <div class="wrapper">
                <div class="content">
                    <p> The NBIU Computer Club at North Bengal International University (NBIU) is your gateway to the
                        exciting world of computing and technology. We're not just a club; we're a community of
                        enthusiastic individuals united by a shared passion for all things tech.
                    </p>
                    <a href="../Html/about our club.html" class="btn">Read More</a>
                </div>
                <div class="image"><img src="../images/about_us.jpg"></div>
            </div>
        </div>
        <!-- Member-->
        <h1 class="member">Member Count</h1>

        <div class="current-member">
            <div class="a1">
                <p>200+ <br> CURRENT <br> MEMBER</p>
            </div>

            <div class="a1">
                <p>400+ <br> ALUMNI</p>
            </div>

            <div class="a1">
                <p>20 <br> ADVISOR</p>
            </div>

            <div class="a1">
                <p>16 <br> CURRENT <br> EXECUTIVES</p>
            </div>
        </div>

        <div class="why">
            <p> Why Join NBIU Computer Club ?</p>
        </div>


        <!----------developer,designer,influncer-->

        <div class="div3">

            <div class="devloper"> <a href="../Html/devloper.html" style="color: black;">
                    <img src="../images/image01.png" alt="logo" id="imgddi">
                    <h1>Devloper</h1>
                    <p class="text1"> To build skills in various sector including Content writing, Photojournalism,
                        Video editing, Event Organaization, Volunteering, Development, UI/UX DEsign and Graphic Design.</p>
                </a>
            </div>

            <div class="designer">
                <a href="../Html/designer.html" style="color: black;">
                    <img src="../images/imaage02.png" alt="logo" id="imgddi">
                    <h1> Designer</h1>
                    <p class="text1">Discover the essence of innovation in our computer club's design.
                        With diverse spaces, cutting-edge tech, and a focus on collaboration, our blueprint fosters
                        a community.</p>
                </a>
            </div>

            <div class="influencer">
                <a href="../Html/influencer.html" style="color: black;">
                    <img src="../images/image03.png" alt="logo" id="imgddi">
                    <h1>Influencer</h1>
                    <p class="text1"> To build skills in various sector including Content writing,
                        Photojournalism, Video editing, Event Organaization, Volunteering, Development,
                        UI/UX DEsign and Graphic Design.</p>
                </a>

            </div>
        </div>

        <!-- <div class="user-account-button" onclick="showUserAccountForm()">
            <i class="fa fa-user"></i>
        </div>  -->
        <div class="feedback-button" onclick="showFeedbackForm()">
            <i class="fa fa-comment"></i>
        </div>



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