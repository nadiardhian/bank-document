<?php
include ('../config.php');
session_start();
switch ($_REQUEST['action']){
    case "sendMessage":
        //echo 'sending response back from php page';
        //global $pdo;
        session_start();
        $query = $pdo->prepare("INSERT INTO messages SET user=?, message=?");
        $row = $query->execute([$_SESSION['login_user'], $_REQUEST['message']]);

        if ($row){
            echo 1;
            exit;
        }

        break;

    case "getMessages":
        //echo 'working';
        $query=$pdo->prepare("SELECT * FROM messages ORDER BY date ASC");
        $row=$query->execute();
        $rs=$query->fetchAll(PDO::FETCH_OBJ);
        //echo var_dump($rs);
    $chat='';
    foreach ($rs as $message){
        //$chat.=$message->message.'<br>';
  
        
        if($_SESSION['login_user']==$message->user){
       
$chat .= '<div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>'.$message->message.'</p>
                                <time datetime="2009-11-13T20:00"><b>'.$message->user .'</b> •'. date('d-m-Y h:i a', strtotime($message->date))  .'</time>
                            </div>
                        </div>
                       
                    </div>';
        }
        else {
            
            $chat .= '<div class="row msg_container base_receive">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>'.$message->message.'</p>
                                <time datetime="2009-11-13T20:00"><b>'.$message->user .'</b> •'. date('d-m-Y h:i a', strtotime($message->date))  .'</time>
                            </div>
                        </div>
                       
                    </div>';
            
     
            
        }
        ?>


<?php
        
        
  
    }
    echo $chat;
        break;
}
?>