<!DOCTYPE html>

<head>
	<?php include('../includes/head.php'); ?>
	<title>Contact | bxCreative</title>
</head>

<body class="contact">

	<?php include('../includes/header.php'); ?>

	<section id="main"><div class="inner clearfix">

		<h1>Contact us</h1>

		<div class="form">

		<form method="post" action="/php/mail.php" id="contact-form">
			<div class="row">
				<label for="ContactForm_name">Name</label>
				<input type="text" id="name" name="name" class="required">
			</div>

			<div class="row">
				<label for="ContactForm_email">Email</label>
				<input type="text" id="email" name="email" class="required email">
			</div>

			<div class="row">
				<label for="ContactForm_message">Message</label>
				<textarea id="message" name="message" class="required" cols="50" rows="6"></textarea>
			</div>

			<div class="row buttons">
				<input type="submit" value="Send" class="submit">
			</div>
		</form>

		</div>

	</div></section><!-- end #main -->

	<?php include('../includes/footer.php'); ?>

</body>

</html>