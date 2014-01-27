<?php include '../application.php'; ?>
<!DOCTYPE html>
	<html>
	<?php include ROOT_PATH . '/partials/head.php'; ?>
	<body>
			<?php include ROOT_PATH . '/partials/header.php'; ?>
			<section class="jumbo jumbo__subpage fixed">
				<div class="container ">
					<div class="jumbo-content">
						<h2 class="jumbo-heading">Visitkort</h2>
						<p>Har du några frågor är det bara höra av sig.</p>
						</div>
					<div class="jumbo-aside">
						<div class="businessCard">
							<img src="/img/OCM_web.png" alt="">
							<p><span>Adress:</span> Industrigatan 352 36 Växjö</p>
							<p><span>Mail:</span> info@ocm.se</p>
							<p><span>Telefon:</span> 0768 - 314 124</p>
						</div>
					</div>
				</div>
			</section>
			<div class="jumbo-ghost"></div>
			<section class="jumbo jumbo__subpage jumbo__subpage-nobg jumbo-megamargin">
				<div class="container">
					<div class="jumbo-aside">
						<h2 class="jumbo-heading l-wide-pre2">Mailformulär</h2>
						<p class="l-wide-pre2">Skicka ett mail direkt från hemsidan.</p>
					</div>
					<div class="jumbo-content">
						<form class="jumbo-form" method="POST">
							<input type="text" name="email[name]" class="contactfield contactfield-name" placeholder="Namn" required><br>
							<input type="email" name="email[email_adress]" class="contactfield contactfield-email" placeholder="Email" required><br>
							<textarea name="email[message]" cols="30" rows="8" class="contactfield contactfield-comment" placeholder="Meddelande" required></textarea><br>
							<input class="btn btn-default" type="submit">
							<input class="btn btn-default" type="reset">
						</form>
					</div>
				</div>
			</section>
			<?php include ROOT_PATH . '/partials/footer.php'; ?>
	</body>
</html>