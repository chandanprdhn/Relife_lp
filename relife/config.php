<?php
    error_reporting(0);

    $conn = mysqli_connect('localhost', 'root', 'root', 'relife_data');

    if (!$conn) {
        die('Failed to connect: ' . mysql_error());
        exit();
    }
    
    mysqli_set_charset($conn, 'utf8');
?>