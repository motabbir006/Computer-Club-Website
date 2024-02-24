<?php
require_once('../connection/db.php');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user information before delete
    $select_query = "SELECT * FROM member_info WHERE ID = $id";
    $result = mysqli_query($con, $select_query);
    $user_data = mysqli_fetch_assoc($result);

    // Delete the user
    $delete_query = "DELETE FROM member_info WHERE ID = $id";
    mysqli_query($con, $delete_query);

    // Send email notification 
    $mail = new PHPMailer(true);

    try {
        //  configuration
        $mail->isSMTP();
        $mail->Host       ='smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sourov00p@gmail.com';
        $mail->Password   = "xywe uvja mpjr lgpp";
        $mail->SMTPSecure = "tls"; 
        $mail->Port       = 587; 

        // Sender information
        $mail->setFrom('sourov00p@gmail.com', 'Admin');

        // Check if the email address is valid before using it
        if (!empty($user_data['email'])) {
            $mail->addAddress($user_data['email'], $user_data['first_name']);
        } else {
            throw new Exception("Error: Invalid email address.");
        }

        // content
        $mail->Subject = "Membership Request Status";
        $mail->Body = "Dear " . $user_data['first_name'] . ",\n\n"
            . "We regret to inform you that your membership request has been rejected.\n"
            . "If you have any concerns, please contact us.\n\n"
            . "Best regards,\n Admin";

        // Send the email
        $mail->send();
        echo "Email notification sent successfully.";

    } catch (Exception $e) {
        echo "Failed to send email notification. Error: " . $e->getMessage();
    }

    // Redirect back to the Member page after deletion
    header("Location: ../HTML/Member.php");
    exit();
}
?>
