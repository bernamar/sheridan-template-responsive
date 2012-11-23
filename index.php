<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="viewport" content="width=device-width;" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.sheridancollege.ca/common/assets/shadowbox/src/css/shadowbox.css" media="all" />
	<link rel="stylesheet" type="text/css" href="http://www.sheridancollege.ca/common/css/cm-reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="http://www.sheridancollege.ca/common/css/homepage.css" media="all" />
	<link rel="stylesheet" type="text/css" href="http://www.sheridancollege.ca/common/css/toc.css" media="all" />
	<link rel="stylesheet" type="text/css" href="http://www.sheridancollege.ca/common/css/main.css" media="all" />
	<!-- Custom Head Stuff -->
	<title>NEW SITE</title>
	<link rel="stylesheet" type="text/css" href="css/NEW_SITE.css" media="all" />
	<script type="text/javascript" src="js/NEW_SITE.js"></script>
	<script type="text/javascript" src="/use.typekit.net/gjn4sbk.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="/css/NEW_SITE-ie.css" media="all" />
	<![endif]-->
</head>
<body id="site">
	<!-- Lots of other stuff in this area, then the Responsive header -->
	<div id="header">
		<img src="img/responsive/logo.png" alt="Sheridan logo">
	</div>
	
	<div id="content_bg">
		<div id="content" class="clearfix">
			
			<?php 
				/*----------- Instructions -----------

					This section automagically handles new pages

					It was created to avoid the redundancy of creating new files

					Create a new php document, e.g.:

						new_page.php

					Link to this page, e.g.:
					
						<a href="/?p=new_page">...</a>

					As long as new pages' filenames are the same as the p value, everything will work automagically
					
				----------- /Instructions -----------*/

				$page = $_GET['p'];
				
				if(!$page) {
					// Site Main Page
					include 'site.php';
				} else {
					
					include $page . '.php';

				}
			?>

		</div>
	</div>
	

	 <div id="footer-sher">		
	 	footer
	 	<br/><br/>
	 	if this text is black = Responsive Design OFF (NOT Responsive)
	 	<br/><br/>
	 	if this text is white = Responsive Design ON (Responsive)

	</div>
</body>