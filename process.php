<?php
if(isset($_POST['action'])){
    $db = new PDO('mysql:host=localhost;dbname=latihan','root','mysql');
    $action = $_POST['action'];
    if($action == "show"){
        $sql = "SELECT * FROM chat";
        $query = $db->query($sql);
        while($res = $query->fetch(PDO::FETCH_OBJ)){
            echo "<li><p class='pesan'>".$res->name." : ".$res->massage."</p><p class='date'>$res->datetime</p></li>";
        }
    }
    elseif($action == "insert"){
        $d = date('Y-m-d');
        $sql = "INSERT INTO chat(name,massage,waktu) VALUES('$_POST[nama]','$_POST[pesan]','$d')";
        $query = $db->query($sql);
    }
}
?>