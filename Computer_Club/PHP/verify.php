<?php 
require("../connection/login_dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="../CSS/verify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/></head>
<body>
   <div class="container">
    <div class="content">
        <div class="text">Verification</div>
        <form method="post">
        <div class="field">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="Enter your name" name="NAME">
            <label>Student_Name</label>
        </div>
        <div class="field">
            <span class="fas fa-lock"></span>
            <input type="text"  placeholder="Student ID" name="SID">
            <label>ID</label>
        </div>
        <div class="field">
            <span class="fas fa-lock"></span>
            <input type="number"  placeholder="Batch" name="BATCH">
            <label>Batch</label>
        </div>
        <div class="field">
            <span class="fas fa-lock"></span>
            <input type="text" placeholder="Department CSE/EEE" name="DEPT">
            <label>Department</label>
        </div>
        <button type="submit" name="LOGIN" >Verify</button>
        </form>
       </div>
   </div>
</body>

<?php
if(isset($_POST['LOGIN'])){
   $query="SELECT * FROM `verify` WHERE `name`= '$_POST[NAME]' AND `student_id`= '$_POST[SID]' AND `batch`= '$_POST[BATCH]' AND `dept`= '$_POST[DEPT]' " ;
$result= mysqli_query($con,$query);
if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['userloginid']= $_POST['userid'];
    header("location: ../Html/password_show.html");
}
else{
    echo "<script> alert('Incorrect information') ;</script>";
}
} 

?>
</html>