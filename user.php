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
<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
<?php include 'template/query_get_user.php'; 

?>   <?php
 
    include"template/sidebar.php" ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data User</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                            <th width="5%">No</th>
                            <th width="25%">Nama</th>
                            <th width="15%">Username</th>
                            <th width="15%">Divisi</th>
                            <th width="15%">Date Created</th>
                            <th width="10%">Role</th>
                        </tr>
              </thead>
              <tbody>
                  <?php 
                        $no=1;
                        while($result= $query->fetch_array()){
                            echo "  
                                <tr>
                                    <td>".$no."</td>
                                    <td>".$result['name']."</td>
                                    <td>".$result['username']."</td>
                                    <td>".$result['divisi']."</td>
                                    <td>".$result['date_created']."</td>
                                    <td>".$result['role']."</td>
                            ";?>   
                                    </td>
                                </tr>
                    <?php
                            $no++;
                        }
                          
                    ?>    
                    </tbody>
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
    <!-- Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
<?php } ?>