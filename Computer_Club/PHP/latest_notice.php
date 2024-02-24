<?php
require_once('../connection/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/notice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <?php
require_once('../connection/db.php');

if (isset($_GET['title'])) {
    $user_id = urldecode($_GET['title']);

    // Use prepared statement with LIKE to prevent SQL injection
    $query = "SELECT * FROM latest_notice WHERE title LIKE ?";
    $stmt = mysqli_prepare($con, $query);

    $user_id = '%' . $user_id . '%';
    mysqli_stmt_bind_param($stmt, "s", $user_id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $userDetails = mysqli_fetch_assoc($result);
        ?>

        <div class="upcoming">
            <div class="up">
                <img src="../admin/PHP/upload/<?php echo htmlspecialchars($userDetails['image']); ?>" alt="Image">
                <h2><?php echo htmlspecialchars($userDetails['title']); ?></h2>
            </div>
            <div class="text-box">
                <?php echo htmlspecialchars($userDetails['description']); ?>
            </div>
        </div>

<?php
    } else {
        echo "User not found";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request";
}
?>



        <!-----footer-->
        <footer class="section-p1">
            <div class="col">
                <h4>Campus</h4>
                <p><i class='fa fa-institution' id="ad1"></i> Chowddopai, Natore Road, Motihar, Rajshahi, Bangladesh
                </p>
                <p><i class="fa fa-phone-square" id="ad1"></i> +8880 1788 107942 </p>
                <p><i class="fa fa-envelope" id="ad1"></i> sourov00p@gmail.com </p>
                <p> <i class="fa fa-clock-o" id="ad1"></i> 10:00 - 18:00 Mon- Sat</p>
            </div>

            <div class="col">
                <h4>About US</h4>
                <div class="text">

                    Where tech passion thrives,skills <br>
                    blossom, and friendships spark in <br>
                    a supportive community.

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

    <script src="JS/script.js"></script>
</body>

</html>