<?php
require_once('../connection/db.php');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['id'])) {
    // Sanitize the input (optional but recommended)
    $id = htmlspecialchars($_GET['id']);

    // Fetch the member details from the 'member_info' table
    $select_query = "SELECT * FROM member_info WHERE id = ?";
    $stmt_select = mysqli_prepare($con, $select_query);

    if ($stmt_select) {
        mysqli_stmt_bind_param($stmt_select, "i", $id);
        mysqli_stmt_execute($stmt_select);
        $result_select = mysqli_stmt_get_result($stmt_select);

        // Check if the member exists
        if ($row_select = mysqli_fetch_assoc($result_select)) {
            // Insert the member into the 'approve_member' table
            $insert_query = "INSERT INTO approve_member (first_name, last_name, student_id, batch, dept, contact_number, email, computer_skill, other_skill, what_to_learn, available)
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert = mysqli_prepare($con, $insert_query);

            if ($stmt_insert) {
                mysqli_stmt_bind_param($stmt_insert, "ssisssssssi",
                    $row_select['first_name'], $row_select['last_name'], $row_select['student_id'],
                    $row_select['batch'], $row_select['dept'], $row_select['contact_number'],
                    $row_select['email'], $row_select['computer_skill'], $row_select['other_skill'],
                    $row_select['what_to_learn'], $row_select['available']);

                mysqli_stmt_execute($stmt_insert);

                // Send email notification using PHPMailer
                $mail = new PHPMailer(true);

                try {
                    // Set SMTP configuration
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'sourov00p@gmail.com'; 
                    $mail->Password   = "xywe uvja mpjr lgpp"; 
                    $mail->SMTPSecure = 'tls';
                    $mail->Port       = 587;

                    // Sender information
                    $mail->setFrom('sourov00p@gmail.com', 'Admin'); 

                    // Receiver information
                    $mail->addAddress($row_select['email'], $row_select['first_name']);

                    // Email content
                    $mail->Subject = "Membership Request Accepted";
                    $mail->Body = "Dear " . $row_select['first_name'] . ",\n\n"
                        . "Congratulations! Your membership request has been accepted.\n"
                        . "If you have any questions, feel free to contact us.\n\n"
                        . "Best regards,\n Admin";

                    // Send the email
                    $mail->send();
                    echo "Email notification sent successfully.";

                } catch (Exception $e) {
                    echo "Failed to send email notification. Error: " . $e->getMessage();
                }

                // Delete the member from the 'member_info' table
                $delete_query = "DELETE FROM member_info WHERE id = ?";
                $stmt_delete = mysqli_prepare($con, $delete_query);

                if ($stmt_delete) {
                    mysqli_stmt_bind_param($stmt_delete, "i", $id);
                    mysqli_stmt_execute($stmt_delete);

                    // Redirect back to the Member page after acceptance
                    header("Location: ../HTML/Member.php");
                    exit();
                } else {
                    echo "Error in preparing the delete statement.";
                }

                // Close the insert statement
                mysqli_stmt_close($stmt_insert);
            } else {
                echo "Error in preparing the insert statement.";
            }
        } else {
            echo "No member found with ID $id.";
        }

        // Close the select statement
        mysqli_stmt_close($stmt_select);
    } else {
        echo "Error in preparing the select statement.";
    }

    // Close the database connection
    mysqli_close($con);
} else {
    echo "ID not provided for acceptance.";
}
?>
