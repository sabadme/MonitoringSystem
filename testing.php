<?php 
	require_once "Mobile-Detect-2.8.33/Mobile_Detect.php";

	$detect = new Mobile_Detect;

	if( $detect->isMobile() ){
		?>

<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
			<script type="text/javascript" src="instascan-master/instascan.min.js"></script>
			<!-- <script type="text/javascript" src="instascan-master/testing_lang.js"></script> -->
			<!-- <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->
  </head>
  <body>
    <video id="preview"></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
  </body>
</html>

};			
		<?php
	}
	else{
		?>
			<script type="text/javascript"></script>
		<?php
	}
?>