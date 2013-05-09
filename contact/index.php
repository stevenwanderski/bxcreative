<!DOCTYPE html>

<head>
	
	<!-- JS files -->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- CSS files -->
	<link rel="stylesheet" href="/css/styles.css" />

	<link rel="shortcut icon" href="/favicon.ico?v=2">
	
	<title>Contact | bxCreative</title>
	<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="D0Stfu8UQWQXnoeOaIWukQrcWO_QXbrfg4SXB6FmzRQ" name="google-site-verification">
	<meta content="web design, chicago web development, chicago il web developer" name="keywords">
	<meta content="Chicago Web Development and Design" name="description">
</head>

<body class="contact">
	
	<?php include('../includes/header.php'); ?>

	<section id="main"><div class="inner clearfix">
		
		<h1>Drop us a note.</h1>
		<p class="body">Got a new great project? Looking for something to do in Chicago? Don't be shy!</p>

		<div class="form">

		<form method="post" action="/contact" id="contact-form">
			<div class="row">
				<label for="ContactForm_name">Name</label>
				<input type="text" id="ContactForm_name" name="ContactForm[name]">
			</div>

			<div class="row">
				<label for="ContactForm_email">Email</label>
				<input type="text" id="ContactForm_email" name="ContactForm[email]">
			</div>

			<div class="row">
				<label for="ContactForm_message">Message</label>
				<textarea id="ContactForm_message" name="ContactForm[message]" cols="50" rows="6"></textarea>
			</div>

			<div class="row buttons">
				<input type="submit" value="Send">
			</div>
		</form>
		</div>

	</div></section><!-- end #main -->

	<?php include('../includes/footer.php'); ?>
	
</body>

</html>