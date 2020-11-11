<?php
session_start();
//error_reporting(0);


if(empty($_SESSION['login_user']) AND empty($_SESSION['password'])){
    header('location:index.php');
} else {
    ?>
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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php
    include 'template/sidebar.php';
    include 'template/connect.php';
    ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Change Password</div>
           <form method="POST" action="change_process.php">
        <div class="card-body">
          <div class="table-responsive">
            <table width='70%' align='center'>
              <thead>
                <tr>
                    <td width='15%'>New Password</td>
                    <td> <input type="password" name="npassword" id="npassword" style="width: 80%; height: 30px" onkeyup="check();" /></td>
                </tr>
                  <tr>
                    <td width='15%'>Confirm Password</td>
                    <td> <input type="password" name="cpassword" id="cpassword" style="width: 80%; height: 30px" onkeyup="check();" /> <span id='message'></span></td>
                </tr>
             
                <tr>
                    <td><br><br><br><br></td>
                    <td><input type="submit" name="save" value="Save" style=" margin-right: 10px;"></td>
                </tr>
            </table>
            <?php
            ?>
            <input type="hidden" name="pass" value="<?php echo $_SESSION['password']?>">
            <input type="hidden" name="uname" value="<?php echo $_SESSION['login_user']?>">
                </form>
          </div>
        </div>
      </div>
    </div>
   <script>
    var check = function(){
  if (document.getElementById('npassword').value === document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>
</html>
    <?php } ?>