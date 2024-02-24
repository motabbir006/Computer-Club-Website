<?php 
require("../connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/></head>
<body>
   <div class="container">
    <div class="content">
        <div class="text">Admin Login From</div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="field">
            <span class="fas fa-user"></span>
           <select name="SELECT1">
            <option value="ADMIN">ADMIN</option>
        </select>
        </div>
        <div class="field">
            <span class="fas fa-lock"></span>
            <input type="text"  placeholder="username" name="USERID" >
            <label>username</label>
        </div>
        <div class="field">
            <span class="fas fa-lock"></span>
            <input type="password"  placeholder="Password" name="USERPASS" >
            <label>password</label>
        </div>
        
        <button type="submit" name="LOGIN" >Login</button>
        </form>
       </div>
   </div>
</body>
<?php
require("../connection/connection.php");

if (isset($_POST['LOGIN'])) {
    $username = $_POST['USERID'];
    $password = $_POST['USERPASS'];
    $selection = $_POST['SELECT1'];

    if (empty($username) || empty($password)) {
        if (empty($username) && empty($password)) {
            echo "<script>alert('Username and password are required');</script>";
        } elseif (empty($username)) {
            echo "<script>alert('Username is required');</script>";
        } elseif (empty($password)) {
            echo "<script>alert('Password is required');</script>";
        }
    } else {
        // SQL injection
        $query = "SELECT * FROM `admin_login_data` WHERE `username`= ? AND `password`= ? AND `selection`= ?";
        $stmt = mysqli_prepare($con, $query);
        
      
        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $selection);

      
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['userloginid'] = $username;
            header("location: ../HTML/notice.php");
        } else {
            echo "<script>alert('Incorrect username, password, or selection');</script>";
        }

     
        mysqli_stmt_close($stmt);
    }

 
    mysqli_close($con);
}
?>


</html>