<?php
    include "template/connect.php";
    if(isset($_POST['tambah'])){
        $name			= $_POST['name'];
        $username               = $_POST['username'];
        $password               = md5($_POST['password']);
        $divisi                 = $_POST['divisi'];
        $role                   = $_POST['role'];
        $tgl			= date("Y-m-d");

        
        $in = mysqli_query($connect,"INSERT INTO user VALUES(NULL, '$username', '$name','$password', '$divisi', '$role', '$tgl')");
                        if($in){
                        ?>
                            <script language='javascript'>
                                alert("User Created");
                                document.location='manage_user.php';
                            </script>
                        <?php
            
                        }   

   }elseif (isset ($_POST['cancel'])) {
        header("Location: manage_user.php");
}
?>