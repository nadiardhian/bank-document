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
    include 'template/query_get_cv.php';
    session_start();
//    echo $_SESSION['login_user'];
?>
    <?php include'template/sidebar.php'; ?>
<?php
    include 'template/connect.php';
    $getname= $_GET['name'];
    $query = mysqli_query($connect,"SELECT * FROM `download` WHERE category LIKE '%$getname%'");
    
   
    ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <?php  echo $getname; ?>
        </div>
        <div class="card-body">
          <div class="table-responsive">
               <form  method="post" action="department_proses.php">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
           <tr>
           <th width="5%" >No</th>
                            <th width="35%">Title</th>
                            <th width="12%">Category</th>
                            <th width="10%">Date Modified</th>
                            <th width="5%">Type</th>
                            <th width="10%">Size</th>
                            <th width="20%"></th>

               
                 <?php
                if(($_SESSION['role']=='uploader')||($_SESSION['role']=='administrator')){
              
              ?>
                <th width="20%">Delete</th>
                          
               
                    <?php
                }   elseif($_SESSION['role']=='downloader'){
                    ?>
                  <th width="20%">Download</th>
               <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                       
                    <?php 

                        $no=1;
                        while($result= $query->fetch_array()){
                            $size= round($result['ukuran_file']/1000);
                          echo "  
                                <tr>
                                    <td>".$no."</td> 
                                    ";
                            ?>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" data-target="#myModals<?php echo $result['id'];?>"> <?= $result['nama_file'] ?></button>
                            
                             <div id="myModals<?php echo $result['id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
             <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">

                        <embed src="file/<?php echo $result['file'];?>"
                               frameborder="0" width="100%" height="400px">

                      
                    </div>

                </div>
            </div
                       <td/>     
                            
                            <?php
                            echo"
                                    
                                    <td>".$result['category']."</td>
                                    <td>".$result['tanggal_upload']."</td>
                                    <td>".$result['tipe_file']."</td>
                                    <td>".$size." Kb</td>
                                    <td>
                            ";                               

                           if(($_SESSION['role']=='uploader')||($_SESSION['role']=='administrator')){
                               echo"
                                        <a href='edit_doc.php?id=".$result['id']."'>edit</a> 
                                ";
                            ?>   
                                       
                                    </td>                
                <td><input class="chk_boxes1" name="checkbox[]" type="checkbox" value="<?php echo $result['id']; ?>"></td>                        
              </tr>
              
              
                            
                            <?php     
                            }
                            
                            elseif($_SESSION['role']=='downloader'){
                                ?>
                        </td>
                          <td><input class="chk_download1" name="files[]" type="checkbox" value="<?php echo $result['file']; ?>"></td>  
                        <?php
                            }else {
                            }
                            $no++;
                        }
                          
                    ?>  
              </tr>
              
          
        
              
              
            
            
                    </tbody>

           <thead>
           <tr>
           <th width="5%" ></th>
                            <th width="35%"></th>
                            <th width="12%"></th>
                            <th width="10%"></th>
                            <th width="5%"></th>
                            <th width="10%"></th>
                            <th width="20%"></th>
               
                 <?php
                if(($_SESSION['role']=='uploader')||($_SESSION['role']=='administrator')){
              
              ?>
                <th width="20%"></th>          
               
                    <?php
                }   elseif($_SESSION['role']=='downloader'){
                    ?>
                  <th width="20%"></th>
               <?php } ?>
                        </tr>
                    </thead>
              <tbody>
                  <?php
                if(($_SESSION['role']=='uploader')||($_SESSION['role']=='administrator')){
              
              ?>
              <tr>
<td colspan="7"></td><td  align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete All">
                
                
                </td>
</tr> 
              
        <?php
                }   elseif($_SESSION['role']=='downloader'){
                    ?>
                                            <tr>

                
              <td colspan="7"></td>  <td  align="center" bgcolor="#FFFFFF"> <input type="checkbox" class="chk_download" label="check all"  /> check</td>
</tr>  
              <tr>
<td colspan="7"></td>
                  
                
                
                </td>
                
                <td  align="center" bgcolor="#FFFFFF"><input name="download" type="submit" value="Download"></td>
</tr> 
           
              
              
              <?php
                } ?>
              
              </tbody>
          </table>
          
          
          </form>
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
        
        
         <script type="text/javascript">
        $(function() {
    $('.chk_boxes').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
    });
});
        </script>
        
        <script type="text/javascript">
        $(function() {
    $('.chk_download').click(function() {
        $('.chk_download1').prop('checked', this.checked);
    });
});
        </script>
  </div>
</body>

</html>          