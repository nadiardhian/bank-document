<?php
    include 'template/connect.php';
    
    if(isset($_POST['save'])){
        $name=$_POST['name'];
        $category=$_POST['category'];
        $id=$_POST['id'];
    
        $edit=  mysqli_query($connect,"update download set nama_file='$name', category='$category'  where id='$id'");
    
        header("Location: department.php");
    }elseif (isset ($_POST['cancel'])) {
        header("Location: department.php");
    }
?>
