<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jQuery.print.js"></script>
</head>
<body>
	<?php include"header.php"; ?>
</body>
</html>

<script>
	$(document).ready(function(){
		$('.login').click(function(){
			if ($('.login').hasClass('active')) {
				$(this).removeClass('active');
			}

			else {
				$(this).addClass('active');
			}

		});
	});
</script>