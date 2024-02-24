<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../connection/connect_db.php';
    
    $required_fields = ['First_Name', 'Last_Name', 'Contact_Number', 'Email', 'Student_ID', 'Batch', 'Department', 'Learning_Field', 'Available', 'Computer_Skill', 'Other_Skill'];
    $empty_fields = [];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $empty_fields[] = $field;
        }
    }
        if (!empty($empty_fields)) {
            echo '<script>';
            echo 'console.log("Redirecting to join_us.html");';
            echo 'window.location.href = "../Html/join us.html";'; // Redirect to join_us.html
            echo 'alert("Please fill in the following fields: ' . implode(', ', $empty_fields) . '");';
            echo '</script>';
        }
    else {
        $FN = $_POST['First_Name'];
        $LN = $_POST['Last_Name'];
        $ContactNumber = $_POST['Contact_Number'];
        $Email = $_POST['Email'];
        $StudentID = $_POST['Student_ID'];
        $Batch = $_POST['Batch'];
        $Dept = $_POST['Department'];
        $Learn = $_POST['Learning_Field'];
        $Available = $_POST['Available'];
        $Computer_Skill = $_POST['Computer_Skill'];
        $Other_Skill = $_POST['Other_Skill'];
        
        $sql = "SELECT * FROM `member_info` WHERE student_id ='$StudentID'";
        $result = mysqli_query($db, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                echo "You are already a member of our club";
            } else {
                $sql = "INSERT INTO `member_info` (last_name, student_id, batch, dept, available, computer_skill, other_skill, what_to_learn, email, contact_number, first_name)
                        VALUES ( '$LN', '$StudentID', '$Batch', '$Dept', '$Available', '$Computer_Skill', '$Other_Skill', '$Learn', '$Email', '$ContactNumber', '$FN')";
                $result = mysqli_query($db, $sql);
                if ($result) {
                    header("location: ../Html/Congratulation_page.html");
                    exit();
                } else {
                    die(mysqli_error($db));
                }
            }
        }
    }
}
?>

