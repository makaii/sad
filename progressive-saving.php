<!DOCTYPE html>
<html>
<head>

	<title>Wealt Management</title>

	<!-- CSS' and SCRIPTS' -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<!-- styles -->


</head>
<body>

	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Wealth Management</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation  mdl-layout--large-screen-only">
					<a class="mdl-navigation__link" href="index.php">Home</a>
					<a class="mdl-navigation__link" href="signin.php" target="_blank">Sign In</a>
					<a class="mdl-navigation__link" href="signup.php" target="_blank">Sign Up</a>
					<a class="mdl-navigation__link" href="aboutus.php">About Us</a>
				</nav>
				</nav>
			</div>
		</header>

		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<span class="mdl-layout-title">Wealth Management</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index.php">Home</a>
				<a class="mdl-navigation__link" href="signin.php" target="_blank">Sign In</a>
				<a class="mdl-navigation__link" href="signup.php" target="_blank">Sign Up</a>
				<a class="mdl-navigation__link" href="aboutus.php">About Us</a>
			</nav>
		</div>

		<!-- main content -->
		<main class="mdl-layout__content">
			<div class="page-content">
				<div class="mdl-grid">
					<div class="mdl-cell mdl--cell--10-col mdl-cell-offset--1-col">
						<?php  
						if($_SERVER["REQUEST_METHOD"] == "POST"){

								$rate = 0;
								$first = $_POST['begin'];
								$final = $_POST['final'];
								$time = $_POST['time'];
								$rate = 2*($final-$first*$time)/$time**2;
							}
						 ?>
						<table class="mdl-data-table mdl-js-data-table">
							<thead>
								<tr>
									<th>Week</th>
									<th>Amount</th>
									<th>Total Amount</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								for ($i=1; $i <= 1; ++$i) { 
									echo "<tr>";
									echo "<td>".$i."</td>";
									echo "<td>".number_format($first,2)."</td>";
									echo "<td>".number_format($first+=$rate,2);"</td>";
									echo "</tr>";
									$total = $first;
									for ($j=$i; $j <= $time; $j++) { 
										echo "<tr>";
										echo "<td>".$j."</td>";
										echo "<td>".number_format($total,2)."</td>";
										echo "<td>".number_format($total+=$rate,2);"</td>";
										echo "</tr>";
									}
								}
								
								 ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer--left-section">
				<div class="mdl-logo">Wealth Management</div>
				<ul class="mdl-mini-footer--link-list">
					<li><a href="">Help</a></li>
					<li><a href="">About us</a></li>
				</ul>
			</div>
		</footer>
		</main>
		
	</div>

</body>
</html>