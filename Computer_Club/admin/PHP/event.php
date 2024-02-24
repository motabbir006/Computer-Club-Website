<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'home_con.php';

    $DATE = isset($_POST['date']) ? mysqli_real_escape_string($con, $_POST['date']) : null;
    $TITLE = isset($_POST['title']) ? mysqli_real_escape_string($con, $_POST['title']) : null;
    $DESCRIPTION = isset($_POST['description']) ? mysqli_real_escape_string($con, $_POST['description']) : null;
    $IMAGE = isset($_POST['image']) ? mysqli_real_escape_string($con, $_POST['image']) : null;

    if ($DATE && $TITLE && $DESCRIPTION && $IMAGE) {
        $sql = "INSERT INTO `events` (date, title, description, image) VALUES ('$DATE', '$TITLE', '$DESCRIPTION', '$IMAGE')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($con));
        }
    } else {
        echo "<script>alert('All fields are required. Please fill in all the fields.'); window.history.go(-1);</script>";
        exit; 
    }
}
?>
