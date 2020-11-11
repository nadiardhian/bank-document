
        <link rel="stylesheet" href="resources/style.css">
        <script type="text/javascript" src="resources/jquery.js"></script>
  
<?php
session_start();

//echo var_dump($_SESSION);
?>
        <div id="wrapper">
            <h2 style="text-align:center">Live Chat</h2>
             
            <div class="chat_wrapper">

                <div id="chat"></div>
                <form class="" id="msgform" action="index.php" method="post">
                    <textarea name="message" rows="5" cols="80" placeholder="masukkan pesan, tekan enter untuk mengirim" class="textarea"></textarea>
                </form>
            </div>
            <br/>
            <br/>
        </div>

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

