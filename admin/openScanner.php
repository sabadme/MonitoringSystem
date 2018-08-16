<div style="margin-left: 200px;">
<form action="" method="POST">
 <button name="closeCam" type="submit">Close</button>
 </form>
	<video id="preview" style="width:200px"></video>

</div>
<script>
	  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
          alert(content); 
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