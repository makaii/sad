<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

	<!-- CSS' and SCRIPTS' -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

</head>
<body>

	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Wealth Management</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation  mdl-layout--large-screen-only">
					<a class="mdl-navigation__link" href="index.php">Home</a>
					<a class="mdl-navigation__link" href="signin.php" target="_self">Sign In</a>
					<a class="mdl-navigation__link" href="signup.php" target="_self">Sign Up</a>
					<a class="mdl-navigation__link" href="aboutus.php" target="_self">About Us</a>
				</nav>
			</div>
		</header>

		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<span class="mdl-layout-title">Wealth Management</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index.php">Home</a>
				<a class="mdl-navigation__link" href="signin.php" target="_self">Sign In</a>
				<a class="mdl-navigation__link" href="signup.php" target="_self">Sign Up</a>
				<a class="mdl-navigation__link" href="aboutus.php" target="_self">About Us</a>
			</nav>
		</div>

		<!-- main content -->
		<main class="mdl-layout__content">
			<div class="page-content">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-offset mdl-cell--4-col mdl-card mdl-shadow--6dp">
						<div class=" mdl-card__title mdl-color--primary mdl-color-text--white">
							<h2 class="mdl-card__title-text">Register</h2>
						</div>
				  		<div class="mdl-card__supporting-text">
							<form action="#">
							    <div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" id="name" />
									<label class="mdl-textfield__label" for="name">Name</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" id="email" />
									<label class="mdl-textfield__label" for="email">Email</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" id="phone" />
									<label class="mdl-textfield__label" for="phone">Phone</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" id="userpass" />
									<label class="mdl-textfield__label" for="userpass">Password</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" id="cnfuserpass" />
									<label class="mdl-textfield__label" for="cnfuserpass">Confirm Password</label>
								</div>
							</form>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Register</button>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer--left-section">
				<div class="mdl-logo">Wealth Management</div>
				<ul class="mdl-mini-footer--link-list">
					<li><a href="">Help</a></li>
					<li><a href="">About us</a></li>
				</ul>
			</div>
		</footer>
	</div>

</body>
</html>