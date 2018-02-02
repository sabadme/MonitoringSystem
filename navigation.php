

<nav class="main-nav">
	<form action="" method="POST">
		<ul class="menu">	
			<li><button type="submit" name="dashboard" class="dashboard">DASHBOARD</button></li>
			<li class="manage-btn">
				<span class="manage">MANAGE</button>
				<ul>
					<li>
						<button class="adduser" name="adduser" type="submit">Add User</button>
					</li>
					<li>
						<button class="addequipment" name="add_equipment" type="submit">Add Equipment</span>
					</li>
				</ul>
			</li>
			<li><button type="submit" name="Catalog" class="catalog">EQUIPMENTS</button></li>
		</ul>
	</form>
</nav>
	
<!-- <script>
	$(function() {
		$('.menu a').on('click', function(e) {
			e.preventDefault();
			$('.page-main').load($(this).attr("class")+'.php');
		});
	});
</script> -->