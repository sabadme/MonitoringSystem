

<nav>
	<ul class="menu">
		<li><a class="dashboard" href="#">DASHBOARD</a></li>
		<li><a class="manage"  href="#">MANAGE</a></li>
		<li><a class="reports"  href="#">REPORTS</a></li>
		<li><a class="generatemenu" href="#">GENERATE QR</a></li>
	</ul>
</nav>

<script>
	$(function() {
		$('.menu a').on('click', function(e) {
			e.preventDefault();
			$('.page-main').load($(this).attr("class")+'.php');
		});
	});
</script>