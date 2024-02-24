<?php
require("../connection/login_dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="text">Login Form</div>
            <form method="post">
                <div class="field">
                    <span class="fas fa-user"></span>
                    <select name="SELECT1" onchange="handleSelection(this)">
                        <option value="USER">USER</option>
                        <option value="ADMIN">ADMIN</option>
                    </select>
                </div>

                <div class="field">
                    <span class="fas fa-user"></span>
                    <input type="text" name="USERID" placeholder="Student ID">
                    <label>Email or phone</label>
                </div>
                <div class="field">
                    <span class="fas fa-lock"></span>
                    <input type="password" name="USERPASS" placeholder="Password">
                    <label>password</label>
                </div>
                <button type="submit" name="LOGIN">sign in</button>
                <div class="joinus">If you don't know your password?
                    <a href="verify.php">Click here</a>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
if (isset($_POST['LOGIN'])) {
    $query = "SELECT * FROM `login_db` WHERE `User_id`= '$_POST[USERID]' AND `User_password`= '$_POST[USERPASS]'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['userloginid'] = $_POST['USERID']; 
        header("location:sourov.php");
    } else {
        echo "<script> alert('Incorrect password') ;</script>";
    }
}

?>

<script>
    function handleSelection(selectElement) {
        var selectedValue = selectElement.value;
        if (selectedValue === "ADMIN") {
            window.location.href = "../admin/PHP/admin_login.php";
        }
    }
</script>

</html>