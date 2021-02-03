<?php include 'func.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Môj web / <?= ucfirst($webPage_name) ?></title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-2.1.1.min.js"></script>

</head>
<body>

	<header>

        <div class="nav-bar">
			<div class="container">
				<h1 class="logo">
					<a href="index.php">
                        <?= $logo; ?>
					</a>
				</h1>
				<nav class="group">
					<ul class="menu navigation">
                        <?php main_nav(); ?>
					</ul>
				</nav>
			</div>
		</div>

	</header>