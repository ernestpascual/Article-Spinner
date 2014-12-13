<!DOCTYPE html>

<html lang="en-US">
	
	<head>
		
		<!-- JQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<!-- Font Awesome -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet' type='text/css'>
		
		<!-- Mobile View Compatibility -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<script src="js/script.js" type="text/javascript"></script>
		
		<meta charset="UTF-8" />
		
	</head>

	<body>

		<header id="header" class="container-fluid col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<section id="file-bar" class="row">
				
				<div id="type-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<i class="fa fa-link"></i>
					<span>Synonyms</span>
				</div>
				<div id="spin-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<i class="fa fa-refresh"></i>
					<span>Spin</span>
				</div>
				<div id="clear-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<i class="fa fa-eraser"></i>
					<span>Clear</span>
				</div>
				
				<input id="action" name="action" type="hidden" value="0" />
				
			</section>
			
		</header>
		
		<section class="container-fluid col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<!-- Input Article Area -->
			<div class="row top">
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Characters: </span>
						<span id="character-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Words: </span>
						<span id="word-count"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<input type="file" accept=".txt/*">
				</div>
				
			</div>
				
			<div class="row middle">
				<textarea id="inputText" class="col-xs-12" placeholder="Please enter or upload your article that you wish to spin."></textarea>
			</div>
			
			<!-- Output Article Area -->
			<div class="row top">
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Adjectives: </span>
						<span id="adjective-change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Verbs: </span>
						<span id="verb-change-count"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Total: </span>
						<span id="change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Percentage: </span>
						<span id="change-percentage"></span>
					</div>
				</div>
				
			</div>
			
			<div class="row middle">
				<textarea id="outputText" class="col-xs-12" readonly></textarea>
			</div>

		</section>
		
	</body>
	
</html>