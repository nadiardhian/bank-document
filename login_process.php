<?php
include 'template/connect.php';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");
  $row = mysqli_fetch_array($query);
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  if ($username == $row['username'] && $password == $row['password']){
    echo '
    <script language="javascript">
    document.location ="dashboard.php";
    </script>
    ';
    echo $name;

  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("Failed to login!");
    document.location ="index.php";
    </script>
    ';
  }

}
 ?>
