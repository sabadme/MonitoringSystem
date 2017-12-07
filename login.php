<?php 
if(isset($_REQUEST['login'])){
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$servername ="localhost";
$username="root";
$password1="";
$db="monitoringsystemdatabase";

$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$sql=mysql_query("SELECT * FROM tbl_login WHERE username='$user' And password='$pass'");
$sql_row=mysql_fetch_array($sql);

$id=$sql_row['id'];

if($user==$sql_row['username'] && $pass==$sql_row['password']){
	header("location:admin.php?id=$id");
}else{
	?>
	<script> 
 alert("Username or Password Error"); 
 	</script>
 	<?php
}

}
 ?>
<div class="login-form-container">
<<<<<<< HEAD
<form action="" method="POST">

	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<button name="login" type="submit">Login</button>

</form>
</div>

=======
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
>>>>>>> 59143f9391a66bf214646c8210aca9db8d0024bf
