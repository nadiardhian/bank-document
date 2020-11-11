<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alita Bank Document</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
        <div class="container login" style="margin-top: 4%;">
           <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center" style="border: 2px #c0c0c0 solid; background-color: #ffffff; opacity: 1; border-radius: 15px">
                    <div class="col-lg-12 text-center" style="margin-top: 30px; margin-bottom: 40px" ><img src="image/logo1.png" width="40%" style="margin-left: 0;"><br></div>
                    <div class="col-lg-12 text-center" >                        
                        <input type="text" name="username" id="sername" placeholder="Username" style="height: 30px; width: 80%; ">           
                    </div>                        
                    <div class="col-lg-12 text-center">                        
                        <input type="password" name="password" id="password" placeholder="Password" style="height: 30px; width: 80%; "/>           
                    </div>                                           
                    <div class="col-lg-12 text-center"  style="margin-bottom: 30px; margin-top: 20px" >                        
                        <input type="submit" name="login" id="login" value="Log in"/>           
                    </div>                                           
                </div>
             </div> 
            <footer id="copyrights">
                <center><p><small><a href="#">PT.Alita Praya Mitra</a>&nbsp;&nbsp;&nbsp;&copy; 1138-2017 </small></p></center>
            </footer>
            </form>
        </div> 
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
<?php
    include 'template/connect.php';
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['login'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
        }
        else
        {
//            // Define $username and $password
           $username=$_POST['username'];
           $password               = md5($_POST['password']);
//            echo $password;
//            $password=$_POST['password'];
            // To protect MySQL injection for Security purpose
//            $username = stripslashes($username);
//            $password = stripslashes($password);
//            $username = mysql_real_escape_string($username);
//            $password = mysql_real_escape_string($password);
            // Selecting Database
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysqli_query($connect,"select * from user where password='$password' AND username='$username'");
            $rows = mysqli_num_rows($query);
//            echo $rows;
            if ($rows > 0 ) {
                while($result= $query->fetch_array()){
                    $_SESSION['login_user']=$result['username']; // Initializing Session
                    $_SESSION['password']=$result['password']; // Initializing Session
                $_SESSION['role']=$result['role']; // Initializing Session
                }
                
                ?>
                 <script>document.location='dashboard.php';</script> // Redirecting To Other Page
            <?php
                 } else {
                $error = "Username or Password is invalid";
            }
           
                mysqli_close($connect); // Closing Connection
        }
    }
?>