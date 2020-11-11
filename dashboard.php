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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    
    
    <style>

/*
body{
    height:400px;
    position: fixed;
    bottom: 0;
}
.col-md-2, .col-md-10{
    padding:0;
}
*/
.panel{
    margin-bottom: 0px;
}
.chat-window{
       bottom: 0;
    position: fixed;
    float: right;
    margin-left: 10px;
    right: 0;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  max-height:300px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_receive{
    padding-left:0;
    margin-left:0;
}
.msg_sent{
    padding-bottom:20px !important;
    margin-right:0;
}
.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  max-width:100%;
}
.messages > p {
    font-size: 13px;
    margin: 0 0 0.2rem 0;
  }
.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}
img {
    display: block;
    width: 100%;
}
.avatar {
    position: relative;
}
.base_receive > .avatar:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border: 5px solid #FFF;
    border-left-color: rgba(0, 0, 0, 0);
    border-bottom-color: rgba(0, 0, 0, 0);
}

.base_sent {
  justify-content: flex-end;
  align-items: flex-end;
}
.base_sent > .avatar:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 0;
    border: 5px solid white;
    border-right-color: transparent;
    border-top-color: transparent;
    box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
}

.msg_sent > time{
    float: right;
}



.msg_container_base::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

.btn-group.dropup{
    position:fixed;
    left:0px;
    bottom:0;
}

</style>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
<?php include 'template/query_get.php'; 

     include "template/connect.php";

    include "template/sidebar.php";
   ?>

<script language="JavaScript" type="text/javascript">
  function addSmiley(textToAdd){
  document.formshout.pesan.value += textToAdd;
  document.formshout.pesan.focus();
}
</script>
<style>
div.b {
    position: fixed;
    right: 34px;
   
    width: 380px;
    height: 400px;
}
    div.a {
    position: fixed;
    left: 265px;
   height: 400px;
    width: 400px;
  
} 
    
        div.c {
    position: fixed;
    left:265px;
   top: 350px;
    width: 400px;
            height: 400px;
  
} 
    
    body.fixed-nav {
    padding-top:0px !important;
}
    body.sticky-footer {
       margin-bottom: 0px !important;
}
   
</style>
    
    
    
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3" style="border:0px;">
          
          <div class="row" style="margin:0;">
         <div class="col-md-6">
             
                  <div class="col-md-12" style="height:400px; overflow:scroll;border:1px solid #ccc; padding:10px;">
                      
<table class="table table-bordered" width="100%" cellspacing="0">
         
      <thead>
                <tr>
                            <th width="2%" >No</th>
                            <th width="15%">Recent Upload</th>
                       
                    
                        </tr>
                    </thead>
                    <tbody>
                            <thead>
                  <?php
     
    $readz=  mysqli_query($connect,"select * from cv order by id DESC" );                     
    
    $no=1;
    while($result= $readz ->fetch_array()){
        
        ?> 
                    <tr><td>
                        <?= $no ?>
                        </td>
                        <td>
                           
                             <button type="button" class="btn" data-toggle="modal" data-target="#myModals<?php echo $result['id'];?>"> <?= $result['nama'] ?></button>
                            
                             <div id="myModals<?php echo $result['id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
             <div class="modal-content" style="top: 200px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">

                        <embed src="file/<?php echo $result['lokasi'];?>"
                               frameborder="0" width="100%" height="400px">

                      
                    </div>

                </div>
            </div>
        </div>
                        </td>
                        
                        </tr>
                        
                                      <?php
            $no++;
    }
    ?>   
                    </tbody>
                </table> 
                  </div>
            
             <div class="row">
                 
             </div>
             
             
             
              </div>
               <div class="col-md-6">
                <div class="col-md-12" style="height:400px; overflow:scroll;border:1px solid #ccc; padding:10px;">
                         <?php
         $readx=  mysqli_query($connect,"select * from cv order by count DESC" );
?>

<table class="table table-bordered" width="100%" cellspacing="0">
         
      <thead>
                <tr>
                            <th width="2%" >No</th>
                            <th width="15%">Most Downloads</th>
                       
                    
                        </tr>
                    </thead>
                    <tbody>
                            <thead>
                    <tr><td>
                        <?= $no ?>
                        </td>
                        <td>
                           
                             <button type="button" class="btn " data-toggle="modal" data-target="#myModal<?php echo $result['id'];?>"> <?= $result['nama'] ?></button>
                            
                             <div id="myModal<?php echo $result['id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
               <div class="modal-content" style="top: 200px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
                    <div class="modal-body">

                        <embed src="file/<?php echo $result['lokasi'];?>"
                               frameborder="0" width="100%" height="400px">

                      
                    </div>

                </div>
            </div>
        </div>
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
              
              
              <div class="row chat-window col-xs-5 col-md-5" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                       
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                     <div id="chat"></div>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                         <form class="" id="msgform" action="index.php" method="post">
                        <textarea name="message"  placeholder="Type a message"  class="form-control input-sm chat_input textarea"></textarea>
                        
                        </form>
                    </div>
                </div>
    		</div>
        </div>
    </div>
              
          </div>
          
      

 </div></div></div>
    
    
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    
    
    
</body>
<script>
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});


</script>
    
    
    <script type="text/javascript">
    LoadChat();
    setInterval(function () {
        LoadChat();
    }, 1000);
    function LoadChat() {
        $.post('handlers/messages.php?action=getMessages', function (response) {

            var scrollpos = $('#chat').scrollTop();
            var scrollpos = parseInt(scrollpos) + 420;
            var scrollHeight = $('#chat').prop('scrollHeight');

            $('#chat').html(response);
            if (scrollpos < scrollHeight){

            } else{
                $('#chat').scrollTop($('#chat').prop('scrollHeight'));
            }

        })
    }
    $('.textarea').keyup(function(e){
            //alert(e.which);
        if (e.which == 13){
            //alert('enter is pressed')
            $('form').submit();
        }
        });
    $('form').submit(function () {
        //alert('form is submit jquery');
        var message = $('.textarea').val();
        $.post('handlers/messages.php?action=sendMessage&message='+message, function (response) {
            //alert(response);
            if (response==1){
                LoadChat();
                document.getElementById('msgform').reset();
            }
        });
        return false;
    })
</script>

</html>
