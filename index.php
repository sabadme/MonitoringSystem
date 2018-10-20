<!DOCTYPE html>

<html>

<head>
	<title>Discover Homes</title>
	<link rel="stylesheet" href="css/style.css">


</head>

<body>

	<?php
        include ("header.php");
        include ("search.php");
    ?>

    <main>

        <!--<?php
            if (isset($_SESSION['u_email'])) {
                echo "You are logged in";
            }
        ?>-->

        <div class="wrapper">
            <p class="sectiontitle">Featured Listings</p>
            <a href="#"><p>See all featured listings</p></a>
            <section>

							<?php
								$sql = "SELECT * FROM tbl_userposts";
								$result = mysqli_query($dbcon, $sql);

								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
											$post_id = $row['post_id'];
											$sqlimg = "SELECT * FROM tbl_userposts WHERE post_id = $post_id";
											$resultimg = mysqli_query($dbcon, $sqlimg);

										while ($rowimg = mysqli_fetch_assoc($resultimg)) {
											echo "<div class='maingridcol'>";
			                	echo "<div class='subgrid1'><img src='uploads/" . $rowimg['post_cover'] . "''></div>";
			                	echo "<div class='subgrid2'>";
			                		echo "<p class='price'>₱ " . $rowimg['post_price'] . "<p>";
			                		echo "<p>" . $rowimg['post_address'] . "</p>";
			                		echo "<p>" . $rowimg['post_bed'] . " bedrooms / " . $rowimg['post_bath'] . " bathrooms / " . $rowimg['post_area'] . "sq mt</p>";
			                	echo "</div>";
			                echo "</div>";
										}
									}

								}
							?>

            <!--</section>

            <p class="sectiontitle">Homes Under P 1,500,000.00</p>
            <a href="#"><p>See all homes under P 1,500,000.00</p></a>
            <section>
                <div class="maingridcol">
                    <div class="subgrid1"></div>
                    <div class="subgrid2">
                        <p class="price">P 2,000,000.00<p>
                        <p>Address 1, Address 2</p>
                        <p>2 bedrooms / 2 bathrooms 500sq mt</p>
                    </div>
                </div>
                <div class="maingridcol">
                    <div class="subgrid1"></div>
                    <div class="subgrid2">
                        <p class="price">P 2,000,000.00<p>
                        <p>Address 1, Address 2</p>
                        <p>2 bedrooms / 2 bathrooms 500sq mt</p>
                    </div>
                </div>
                <div class="maingridcol">
                    <div class="subgrid1"></div>
                    <div class="subgrid2">
                        <p class="price">P 2,000,000.00<p>
                        <p>Address 1, Address 2</p>
                        <p>2 bedrooms / 2 bathrooms 500sq mt</p>
                    </div>
                </div>
                <div class="maingridcol">
                    <div class="subgrid1"></div>
                    <div class="subgrid2">
                        <p class="price">P 2,000,000.00<p>
                        <p>Address 1, Address 2</p>
                        <p>2 bedrooms / 2 bathrooms 500sq mt</p>
                    </div>
                </div>
            </section>-->
        </div>
    </main>

	<?php include ("footer.php"); ?>

</body>

</html>
