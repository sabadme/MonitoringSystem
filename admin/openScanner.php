<style>
.scanner-container {
  width: 50%;
  display: flex;
  flex-direction: column;
  padding: 100px;
  margin: 0 auto;
  border: 1px solid #283142;
  height: 500px;
  margin-top: 50px;
  border-radius: 50px;
  background: powderblue;
}
.scanner-container button, span {
  margin: 0 auto;
}

.scanner-container .camera {
  height: 135px;
  margin-bottom: 30px;
}

.scanner-container input {
  padding: 10px;
}


.scanner-container .locate {
  margin-top: 30px;
  padding: 10px;
}
.scannercam{
  margin: 0 auto;
}
  
</style>

<div class="scanner-container">
  <form action="" method="POST" class="scannercam">
  <button name="closeCam" type="submit">Close</button>
  </form>
  <video id="preview" style="width:200px"></video>
  <span>QR-CODE</span>
   <form action="" method="POST">
  <input type="text" id="scannerValue" name="equipmentData" value="<?php echo $content; ?>">
 
  <button class="locate" name="equipmentLocation">LOCATE</button>
  </form>
</div>


<script>
	  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
         /* alert(content); */
          document.getElementById("scannerValue").value = content;
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