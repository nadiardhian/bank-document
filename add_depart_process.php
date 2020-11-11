<?php
    include "template/connect.php";
echo $name=$_POST['nama'];
    mysqli_query($connect,"INSERT INTO dept VALUES(NULL,'$name')");
header('location:manage_dept.php');
?>