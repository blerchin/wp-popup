<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>walla popUP</title>
		
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		                <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
		                               <link rel="shortcut icon" href="images/ico/favicon.png">
		<?php wp_head() ?>
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript"
			src="http://fast.fonts.net/jsapi/9b0a7ca9-d19e-47d4-a873-33ac7b594ff3.js">
		</script>	

		
	</head>
	<body class="wallapopup">
			<div class="container">
				<header class="page-header">
				<div class="masthead row">
					<div class="col-md-8">
						<h1>
							<p>wallaPopUP</p>
							<img src="<?php echo get_template_directory_uri() ?>/images/wallapopup_logo.png"
								/>
						</h1>
					</div>
					<div class="col-md-4 header-nav">
						<?php wp_nav_menu( array('theme_location' => 'header_nav',) ); ?>
					</div>


				</header>
