<?php
include '../connection/home_con.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table = '';

    if (isset($_POST['store_data_submit'])) {
        $table = 'latest_notice';
    } elseif (isset($_POST['events_submit'])) {
        $table = 'event_notice';
    } elseif (isset($_POST['upcoming_table'])) {
        $table = 'upcoming_notice';
    }

    if ($table) {

        $DATE = isset($_POST['date']) ? mysqli_real_escape_string($con, $_POST['date']) : null;
        $TITLE = isset($_POST['title']) ? mysqli_real_escape_string($con, $_POST['title']) : null;
        $DESCRIPTION = isset($_POST['description']) ? mysqli_real_escape_string($con, $_POST['description']) : null;

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $targetDir = "upload/";
            $IMAGE = mysqli_real_escape_string($con, basename($_FILES['image']['name']));
            $targetFilePath = $targetDir . $IMAGE;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            $check = getimagesize($_FILES['image']['tmp_name']);
            if ($check !== false) {

                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
                if (in_array($fileType, $allowedTypes)) {

                    if (!is_dir($targetDir)) {
                        mkdir($targetDir, 0777, true);
                    }

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                    } else {
                        echo "Failed to move uploaded file.";
                        exit;
                    }
                } else {
                    echo "Invalid image format. Please upload a JPG, JPEG, PNG, or GIF file.";
                    exit;
                }
            } else {
                echo "File is not an image.";
                exit;
            }
        } else {
            echo "No file uploaded or an error occurred during upload.";
            exit;
        }

        if ($DATE && $TITLE && $DESCRIPTION && $IMAGE) {
            $sql = "INSERT INTO `$table` (date, title, description, image) VALUES ('$DATE', '$TITLE', '$DESCRIPTION', '$IMAGE')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                $mail = new PHPMailer(true);

                try {
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'sourov00p@gmail.com';
                    $mail->Password   = "xywe uvja mpjr lgpp";
                    $mail->SMTPSecure = 'tls';
                    $mail->Port       = 587;

                    // Sender information
                    $mail->setFrom('sourov00p@gmail.com', 'Admin');


                    $fetch_emails_query = "SELECT email FROM approve_member";
                    $result_emails = mysqli_query($con, $fetch_emails_query);

                    while ($row_email = mysqli_fetch_assoc($result_emails)) {

                        $mail->addAddress($row_email['email']);

                        $mail->Subject = "New Notice Published: $TITLE";
                        $mail->Body = "Dear Member,\n\n"
                            . "A new notice has been published:\n\n"
                            . "Title: $TITLE\n"
                            . "Description: $DESCRIPTION\n"
                            . "Date: $DATE\n\n"
                            . "Best regards,\n Admin";

                        $mail->send();

                        $mail->clearAddresses();
                    }

                    echo '<script>alert("Data inserted successfully into ' . $table . ', and email notification sent to all members."); window.location.href = "../HTML/notice.php";</script>';
                } catch (Exception $e) {
                    echo "Failed to send email notification. Error: " . $e->getMessage();
                }
            } else {
                die(mysqli_error($con));
            }
        } else {
            echo "<script>alert('All fields are required. Please fill in all the fields.'); window.history.go(-1);</script>";
            exit;
        }
    } else {
        echo "Invalid request";
    }
}
