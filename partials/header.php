<header>
	<div class="container">
		<div class="logo">
			<a href="/"><img src="img/OCM_web.png" alt="Ocm logga"></a>
		</div>
		<div class="phoneNrContainer">
			<img src="/img/phone.png" alt="">
			<p><a href="tel:+46768314124"> 0768 - 314 124</a></p>
		</div>
		<nav>
			<ul>
				<li><a href="/"<?php if($_SERVER['REQUEST_URI'] == "/") echo " class='active'"; ?>>Hem</a></li>
				<li><a href="/about.php" <?php if($_SERVER['REQUEST_URI'] == "/about.php") echo "class='active'";?>>Om oss</a></li>
				<li><a href="/project.php" <?php if($_SERVER['REQUEST_URI'] == "/project.php") echo "class='active'";?>>Projekt</a></li>
				<li><a href="/contact.php" <?php if($_SERVER['REQUEST_URI'] == "/contact.php") echo "class='active'";?>>Kontakt</a></li>
			</ul>
		</nav>
	</div>
</header>