<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='project2';

$db= mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$db){
    die(mysqli_error($db));
}

if($db){
   // echo"Connection successfully";
}
else{
    die(mysqli_error($db));
}
?>