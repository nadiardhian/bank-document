<?php
include 'template/connect.php';

$del=mysqli_query($connect, "delete from dept where id='$_GET[id]'");

header("Location:manage_dept.php");
?>