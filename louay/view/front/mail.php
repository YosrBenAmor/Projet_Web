<?php
if (isset($_POST['mailform'])) {
        $header = "MIME-Version: 1.0 \r\n ";
        $header .= 'From: "me@example.com"<lou.abidi00@gmail.com>' . "\n";
        $header .= 'content-type:text/html; charset ="uft-8"' . "\n";
        $header .= 'content-Transfer-Encoding: 8bit ';

        $message = '
<html>
<body>
<div align ="centre ">
   
      j\'ai envoyer un mail 


      </div>

</body> 
</html>
';

        mail("louay.abidi@esprit.tn ", "salue test ", $message, $header);
}
?>
<form method="POST" action="">
<input type ="submit" value ="recevoire un mail " name="mailform"/>

</form>