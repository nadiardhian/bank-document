<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'alita_document1';
    
    $connect = mysqli_connect($host, $username, $password);
    mysqli_select_db($connect,$database);
    
?>
