<?php
session_start();
//error_reporting(0);


if(empty($_SESSION['login_user']) AND empty($_SESSION['password'])){
    header('location:index.php');
} else {
    
      include "template/connect.php";
   
    $readss=  mysqli_query($connect,"select * from dept order by nama_dept ASC" );
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

    include"template/sidebar.php" ?>
    
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Upload Document</div>
           <form method="POST" action="add_doc_process.php" enctype="multipart/form-data">
        <div class="card-body">
          <div class="table-responsive">
            <table width='70%' align='center'>
              <thead>
                <tr>
                    <td width='15%'>File Name</td>
                    <td> <input type="text" name="nama" style="width: 90%; height: 30px"></td>
                </tr>
                <tr>
                    <td width='15%'>Departement</td>
                    <td>
                          <?php
    while($result= $readss ->fetch_array()){
        ?>
    
                        <input type="radio" name="category" value="<?= $result['nama_dept'] ?>" style="width: 5%"><?= $result['nama_dept'] ?><br>
                        <?php
                          }
    ?> 
                    </td>
                </tr>
                <tr>
                    <td width='15%'>Choose File</td>
                    <td> <input type="file" name="file" style="width: 90%; height: 30px"></td>
                </tr>
                <tr>
                    <td><br><br><br><br></td>
                    <td><input type="submit" name="upload" value="Upload" style=" margin-right: 10px;"><input type="submit" name="cancel" value="Cancel"></td>
                </tr>
            </table>
                </form>
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