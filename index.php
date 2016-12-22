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

				<div class="img-container">
					<div class="mdl-grid">
						<div class="mdl-cell mdl--cell--2-col">
						Anokol
					</div>
					<div class="mdl-cell mdl--cell--2-col">
						Evangelista
					</div>
					<div class="mdl-cell mdl--cell--2-col">
						Iquina
					</div>
					</div>
				</div>

				<div class="mdl-grid section-grey">
					<div class="mdl-cell mdl-cell--1-offset mdl-cell--10-col">
						<h3>Save in Progression</h3>
						<p>Use our progressive saving calculator, to know how much will you need to save every week to get that ideal savings</p>
						<!-- Numeric Textfield -->
							<form action="progressive-saving.php" method="POST">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="intialamount" name="begin">
				    				<label class="mdl-textfield__label" for="initialamount">Initial Amount</label>
				    				<span class="mdl-textfield__error">Input is not a number!</span>
				  				</div>
				  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="weeks" name="time">
				    				<label class="mdl-textfield__label" for="weeks">Number of Weeks</label>
				    				<span class="mdl-textfield__error">Input is not a number!</span>
				  				</div>
				  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="finalamount" name="final">
				    				<label class="mdl-textfield__label" for="finalamount">Final Amount</label>
				    				<span class="mdl-textfield__error">Input is not a number!</span>
				  				</div>
				  				<!-- Flat button with ripple -->
								<button class="mdl-button mdl-js-button mdl-js-ripple-effect" type="submit">
  									Calculate
								</button>
							</form>
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