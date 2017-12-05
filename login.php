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
<form action="" method="POST">

	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<button name="login" type="submit">Login</button>

</form>
</div>

