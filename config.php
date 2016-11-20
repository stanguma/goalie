<?php

  //start session in all pages
  if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
  //if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

	// sandbox or live
	define('PPL_MODE', 'sandbox');

	if(PPL_MODE=='sandbox'){

		define('PPL_API_USER', 'Goalkeepersfirst.club_api1.aol.com');
		define('PPL_API_PASSWORD', 'RBV9HXNV9QHUEPSK');
		define('PPL_API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AfzJuqrZ1HNZVCthus81TeViyd8L');
	}
	else{

		define('PPL_API_USER', 'sylviatanguma-facilitator_api1.aol.com');
		define('PPL_API_PASSWORD', '4F34BNGKNEQ93PHQ');
		define('PPL_API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AGtGMhAZpMOMXcPC8cUzlWyO1AnG');
	}

	define('PPL_LANG', 'EN');

	define('PPL_LOGO_IMG', 'http://www.sanwebe.com/wp-content/themes/sanwebe/img/logo.png');

	define('PPL_RETURN_URL', 'http://localhost/paypal/process.php');
	define('PPL_CANCEL_URL', 'http://localhost/paypal/cancel_url.php');

	define('PPL_CURRENCY_CODE', 'EUR');
