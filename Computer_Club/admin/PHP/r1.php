<?php
include '../connection/home_con.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table = '';

    if (isset($_POST['btn1'])) {
        $table = 'r1';
    } elseif (isset($_POST['btn2'])) {
        $table = 'r2';
    } elseif (isset($_POST['btn3'])) {
        $table = 'r3';
    }
    elseif (isset($_POST['btn4'])) {
        $table = 'r4';
    } elseif (isset($_POST['btn5'])) {
        $table = 'r5';
    }
    elseif (isset($_POST['btn6'])) {
        $table = 'r6';
    } 
    if ($table) {
      
        $name = isset($_POST['name']) ? mysqli_real_escape_string($con, $_POST['name']) : null;
        $position = isset($_POST['position']) ? mysqli_real_escape_string($con, $_POST['position']) : null;
        $description = isset($_POST['description']) ? mysqli_real_escape_string($con, $_POST['description']) : null;

        // Check if a file was uploaded
        if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            $targetDir = "upload/";
            $img = mysqli_real_escape_string($con, basename($_FILES['img']['name']));
            $targetFilePath = $targetDir . $img;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Check if the file is an actual image
            $check = getimagesize($_FILES['img']['tmp_name']);
            if ($check !== false) {
                // Allow certain file formats
                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
                if (in_array($fileType, $allowedTypes)) {
                    // Create the target directory if it doesn't exist
                    if (!is_dir($targetDir)) {
                        mkdir($targetDir, 0777, true);
                    }
                    // Upload file to the server
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFilePath)) {
                        // File moved successfully
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

        if ($name && $position && $img ) {
            $sql = "INSERT INTO `$table` (name, position, description, image_path) VALUES ('$name', '$position', '$description', '$img')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "<script>alert('Data inserted successfully.'); window.history.go(-1);</script>";
                exit; 

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
?>
