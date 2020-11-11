<?php
    include 'connect.php';
   
    $query=  mysqli_query($connect,"select * from user order by name ASC" );
////    $getprojectsales= mysql_query("select a.name from tbl_role a, tbl_project b where a.id=b.id_sales and b.id='$id' and a.role='sales'",$connect);
////    $getprojectpm= mysql_query("select i.name from tbl_role i, tbl_project j where i.id=j.id_sales and j.id='$id' and i.role='project manager'",$connect);
//    $getsales=  mysql_query("select * from tbl_role where role='sales' ",$connect);
//    $getpm=  mysql_query("select * from tbl_role where role='project manager'",$connect);
//    $getpresales=  mysql_query("select * from tbl_role where role='pre-sales'",$connect);
//    $getcustomer= mysql_query("select * from tbl_customer", $connect);
//    $getpo= mysql_query("select * from tbl_po", $connect);
//    
?>
