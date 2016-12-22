<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>

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
					<a class="mdl-navigation__link" href="signin.php" target="_blank">Sign In</a>
					<a class="mdl-navigation__link" href="signup.php" target="_blank">Sign Up</a>
					<a class="mdl-navigation__link" href="aboutus.php">About Us</a>
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
			</nav>
		</div>

		<!-- main content -->
		<main class="mdl-layout__content">
			<div class="page-content">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-offset mdl-cell--4-col mdl-card mdl-shadow--4dp">
					    <div class="mdl-card__title">
					        <h2 class="mdl-card__title-text">Login</h2>
					    </div>
					    <div class="mdl-card__media">
					        <img class="article-image" src="" border="0" alt="">
					    </div>
	                    <div class="mdl-card__supporting-text">
	                        <p>
	                            Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
	                        </p>	
	                        <form action="#" class="">
	                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="username">
	                                <label class="mdl-textfield__label" for="username">Username</label>
	                                <span class="mdl-textfield__error">Letters and spaces only</span>
	                            </div>
	                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                                <input class="mdl-textfield__input" type="text" id="password">
	                                <label class="mdl-textfield__label" for="password">Password</label>
	                            </div>
	                            <p>
	                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
	                                    Submit
	                                </button>
	                            </p>
	                        </form>
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