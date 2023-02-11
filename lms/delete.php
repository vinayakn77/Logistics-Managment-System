<?php
    include("db_connect.php");
    session_start();
    $id = $_SESSION['id'];
    $sql = "DELETE  FROM staff WHERE StaffID='$id'";
    $sql1 = "DELETE  FROM CREDENTIALS WHERE StaffID='$id'";
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    
    header("Location: login.php");

    //$staff = mysqli_fetch_assoc($result);
?>