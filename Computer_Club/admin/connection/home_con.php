<?php 
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='project2';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
   /* echo "Connection succesful";*/
}
else{
    die(mysqli_error($con));
}
?>