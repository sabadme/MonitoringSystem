

<nav class="main-nav">
	<form action="" method="POST">
		<ul class="menu">	
			<li>
                <button type="submit" name="dashboard" class="dashboard">DASHBOARD</button>
            </li>
			<li class="manage-btn">
				<span class="manage">MANAGE</button>
				<ul>
					<li>
						<button class="adduser" name="adduser" type="submit">Add User</button>
					</li>
					<li>
						<button class="addequipment" name="add_equipment" type="submit">Add Equipment</span>
					</li>
                    <li>
                        <button class="addroom" name="add_room" type="submit">Add Room</button>
                    </li>
                    <li>
                        <button class="rooms" name="rooms" type="submit">Rooms</button>
                    </li>
				</ul>
			</li>
			<li>
                <a class="button catalog" href="catalog-index.php?page=0">Equipments</a>
            </li>
            <li>
                <button class="booking" name="booking" type="submit">Booking</button>
            </li>
            <li>
                <button class="reports" name="reports" type="submit">Reports</button>
            </li>
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