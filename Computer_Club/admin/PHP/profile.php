<?php /*
session_start();

$user_id = isset($_SESSION['userloginid']) ? $_SESSION['userloginid'] : null;
*/?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../CSS/profile.css">
</head>

<body>

<div class="profile-container">
    <div class="profile-header">
        <h1>User Profile</h1>
    </div>

    <div class="profile-content">
        <div class="profile-image" onclick="triggerImageUpload()">
            <img src="../images/sourov1.jpg" alt="User Image" id="userImage">
            
            <input type="file" id="imageUpload" accept="image/*" onchange="displayImage(this)" style="display: none;">
            <button id="changeImageButton">Change Image</button>
        </div>

        <div class="profile-details">
            <label for="userID">ID:</label>
            <input type="text" id="userID" placeholder="Enter your ID" value="<?php echo $user_id; ?>" readonly>

            <label for="userName">Name:</label>
            <input type="text" id="userName" placeholder="Enter your name">
        </div>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="sourov.php">Home_Page</a></p>
    </div>
</div>

<script>

function triggerImageUpload() {
    var imageInput = document.getElementById('imageUpload');
    imageInput.click(); 
}

function displayImage(input) {
    var image = document.getElementById('userImage');
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

document.getElementById('changeImageButton').addEventListener('click', function() {
    triggerImageUpload();
});

</script>

</body>

</html>
