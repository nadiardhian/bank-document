<?php
include 'template/connect.php';

$del=mysqli_query($connect, "delete from cv where id='$_GET[id]'");

header("Location:all_cv.php");
?>