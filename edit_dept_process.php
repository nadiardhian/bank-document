<?php
    include "template/connect.php";
    if(isset($_POST['save'])){
        $nama_dept			= $_POST['nama_dept'];        
        $id=$_POST['id'];
$edit=  mysqli_query($connect,"update dept set nama_dept='$nama_dept' where id='$id'");

     header("Location: manage_dept.php");
    }elseif (isset ($_POST['cancel'])) {
        header("Location: manage_dept.php");
    }

?>