<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'The payroll schedule calendar published by the U.S. Department of the Interior is available at: https://www.doi.gov/ibc/resources/payroll-calendars<br /><br /><br />The Payroll Schedule app is an unofficial app that allows viewing the current pay period directly on your watch. <br /><br />To request support for the app please fill in the form below.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		 

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<title>Payroll Schedule | Payroll Schedule App</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Climate/consolidated.css?rwcache=625445788" />
		
	    
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
	<div class="hero" id="hero">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="https://qtime.hopto.org/Sites/">
                <span class="navbar-title">Payroll Schedule App</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"><li class="nav-item active"><a href="./" rel="" class="nav-link">Payroll Schedule</a></li><li class="nav-item"><a href="../" rel="" class="nav-link">Privacy</a></li><li class="nav-item"><a href="../markdown-2/" rel="" class="nav-link">Terms And Conditions</a></li></ul>
            </div>
        </nav>

		<div class="hero-content" id="hero">
				<h1 class="hero-title">Payroll Schedule App</h1>
				<h2 class="hero-slogan">Unofficial app to view the payroll schedule on  your watch.</h2>
		</div>

		<div class="hero-background"></div>
	</div>

	<main class="content">
		<div class="container py-5">
			<div class="row">
				<div class="col-sm-8 main">
					
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

                </div>

                <div class="col-sm-4 sidebar">
                    <h4></h4>
                    
                    
                </div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="footer-content text-center">
							&copy; 2020 Eduardo Ramos <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":su";var _rwObsfuscatedHref3 = "ppo";var _rwObsfuscatedHref4 = "rt@";var _rwObsfuscatedHref5 = "pay";var _rwObsfuscatedHref6 = "rol";var _rwObsfuscatedHref7 = "lsc";var _rwObsfuscatedHref8 = "hed";var _rwObsfuscatedHref9 = "ule";var _rwObsfuscatedHref10 = ".ap";var _rwObsfuscatedHref11 = "p";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10+_rwObsfuscatedHref11; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
						</div>

						<ul class="navbar-nav ml-auto"><li class="nav-item active"><a href="./" rel="" class="nav-link">Payroll Schedule</a></li><li class="nav-item"><a href="../" rel="" class="nav-link">Privacy</a></li><li class="nav-item"><a href="../markdown-2/" rel="" class="nav-link">Terms And Conditions</a></li></ul>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript" src="../rw_common/themes/Climate/js/main.js?rwcache=625445788"></script>
</body>

</html>