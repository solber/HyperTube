<?php require 'required/lang.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>404 - Ahri found</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="/css/404.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="/css/font-awesome.css">
<link href="//fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<div class="header">
	<h1><?php echo $missing[$_SESSION['lang']]['header']; ?></h1>
</div>
<div class="w3-main">
	<div class="agile-info">
		<h2>404</h2>
		<h3><?php echo $missing[$_SESSION['lang']]['h3']; ?></h3>
		<p><?php echo $missing[$_SESSION['lang']]['p']; ?></p>
		<a href="index"><i class="fa fa-angle-double-left" aria-hidden="true"></i><?php echo $missing[$_SESSION['lang']]['link']; ?></a>
	</div>
</div>
<div class="footer-w3l">
	<p>2018 Hypertube - wnoth - @42 | Design by <a href="https://www.solber-software.fr">wnoth</a></p>
</div>

</body>
</html>