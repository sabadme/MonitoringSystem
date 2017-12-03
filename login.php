<?php 
if(isset($_REQUEST["login"])){

$seven=$_REQUEST['seven'];
	echo $seven;


$eigth=$_REQUEST['eigth'];	
	echo $eigth;
}
?>

<div class="login-form-container">
	<form action="" method="POST">
		
		<button name="seven" value="7">7</button>
		<button name="eigth" value="8">8</button>
		<button name="nine">9</button>
		<button name="four">4</button>
		<button name="five">5</button>
		<button name="six">6</button>
		<button name="three">3</button>
		<button name="two">2</button>
		<button name="one">1</button>
		<button name="zero">0</button>
		<button name="zero">0</button>
		<button name="login" type="Submit">Log in</button>

	</form>


<input type="text" name="passwordshow" placeholder="<?php echo $seven; ?>">
</div>