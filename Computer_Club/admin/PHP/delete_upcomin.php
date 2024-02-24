<?php
require_once('../connection/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM upcoming_notice WHERE ID = $id";
    mysqli_query($con, $delete_query);
    // Redirect back to the notice page after deletion
    header("Location: ../HTML/notice.php");
    exit();
}
?>
