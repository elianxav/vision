<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/general.css">
	<?php

	if($css != "")
	{
		echo '<link rel="stylesheet" type="text/css" href="css/'.$css.'.css">';
	}

	?>

	<title> <?php echo $title; ?> </title>
</head>
<body>

<div class="pos-f-t m-0">
	<div class="collapse" id="navbarToggleExternalContent">
		<div class="bg-cor p-4">
			<h5 class="text-white h4">Menu</h5>
			<span class="text-white">Em desenvolvimento...</span>
		</div>
	</div>
	<nav class="navbar navbar-dark bg-cor">
		<a class="navbar-brand" href="index.php">
			<img src="img/ico.png" height="25" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
</div>