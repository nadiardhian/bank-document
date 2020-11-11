<?php
    include 'connect.php';
   
    $query=  mysqli_query($connect,"select * from cv order by nama ASC" );
    ?>