<?php
include 'template/connect.php';
$del=mysqli_query($connect, "delete from user where id='$_GET[id]'");

header("Location: manage_user.php");
?>