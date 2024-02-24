<?php
require_once('../connection/db.php');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$alertMessage = '';
$alertType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    $query = "INSERT INTO feedback (student_id, name, text) VALUES ('$student_id', '$name', '$feedback')";

    if (mysqli_query($con, $query)) {

        $adminEmail = 'sourov00p@gmail.com'; 
        $subject = 'New Feedback Submission';
        $message = "Name: $name\nStudent ID: $student_id\nFeedback: $feedback";

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sourov00p@gmail.com';
        $mail->Password   = "xywe uvja mpjr lgpp";
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('sourov00p@gmail.com', 'Your Name');
        $mail->addAddress( $adminEmail, 'Admin');
        $mail->Subject = $subject;
        $mail->Body = $message;

        if ($mail->send()) {
            $alertMessage = "Feedback submitted successfully! Notification sent to admin.";
            $alertType = 'success';
        } else {
            $alertMessage = "Feedback submitted successfully! Failed to send notification to admin. Error: {$mail->ErrorInfo}";
            $alertType = 'warning';
        }
    } else {
        $alertMessage = "Error: " . mysqli_error($con);
        $alertType = 'error';
    }

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="../CSS/fed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(message, type) {
            Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
</head>

<body>

    <form id="feedbackForm" action="" method="post">

        <label for="icon " id="adi"><a href="sourov.php"> <i class='fa fa-arrow-left' id="ad1"> </i> </a></label>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="student_id">ID:</label>
        <input type="text" name="student_id" required>

        <label for="feedback">Your Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea>

        <br>

        <input type="submit" value="Submit Feedback">
    </form>

    <?php

    if (!empty($alertMessage)) {
        echo "<script>showAlert('{$alertMessage}', '{$alertType}');</script>";
    }
    ?>
</body>

</html>