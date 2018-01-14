<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="nav">
			<ul class="menu">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="<?php echo site_url('about'); ?>">About us</a></li>
				<li><a href="<?php echo site_url('contact-us'); ?>">Contact us</a></li>
				<li><a href="<?php echo site_url('news'); ?>">News</a></li>
			</ul>
		</div>
	</div>
