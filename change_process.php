<?php
    include "template/connect.php";
    if(isset($_POST['save'])){
        $npassword               = md5($_POST['npassword']);
        $cpassword               = md5($_POST['cpassword']);
        $uname                  = $_POST['uname'];
        
            if($npassword==$cpassword){
                mysqli_query($connect,"Update user set password='$npassword' where username='$uname'");
                header("Location: dashboard.php");
            } else {
 ?>
                <script language='javascript'>
                    alert("ERROR: New password dan confirm didn't match");
                    document.location='change.php';
                </script>
<?php 

            }           
   }elseif (isset ($_POST['cancel'])) {
        header("Location: dashboard.php");
    }
?>