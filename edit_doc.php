<?php
session_start();
//error_reporting(0);


if(empty($_SESSION['login_user']) AND empty($_SESSION['password'])){
    header('location:index.php');
} else {
    ?>
<?php
    include 'template/connect.php';
    
    $q_edit=mysqli_query($connect,"select * from download where id='$_GET[id]'");
    $getext= $q_edit->fetch_array();
    
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
 <?php
 
    include"template/sidebar.php" ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit Document</div>
           <form method="POST" action="edit_doc_process.php" enctype="multipart/form-data">
        <div class="card-body">
          <div class="table-responsive">
            <table width='70%' align='center'>
              <thead>
                <tr>
                    <tr>
                <td id="detail" width='20%'>Tittle</td>
                <td id="detail"><input type="text"   name="name" value="<?php echo $getext['nama_file'];?>" style="width: 90%; height: 30px;"></td>
            </tr>
            <tr>
                <td id="detail" width='20%'>Department</td>
                <td id="detail"><input type="radio" name="category" value="Legal" style="width: 5%" <?php if($getext['category']=='Legal'){echo 'checked';}?>/>Legal<br>
                    <input type="radio" name="category" value="Finance" style="width: 5%" <?php if($getext['category']=='Finance'){echo 'checked';}?>/>Finance<br>
                    <input type="radio" name="category" value="HCO" style="width: 5%" <?php if($getext['category']=='HCO'){echo 'checked';}?>/>HCO<br>
                
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="Save" style=" margin-right: 10px;"><input type="submit" name="cancel" value="Cancel"></td>
            </tr>
                </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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