<?php
	
$title = "Vision";
$css = "index";
include("head.php");

?>

<div class="pos-f-t">
	<div class="collapse" id="navbarToggleExternalContent">
		<div class="bg-cor p-4">
			<h5 class="text-white h4">Menu</h5>
			<span class="text-white">Em desenvolvimento...</span>
		</div>
	</div>
	<nav class="navbar navbar-dark bg-cor">
		<a class="navbar-brand" href="#">
			<img src="img/ico.png" height="25" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
</div>

<header class="jumbotron jumbotron-fluid py-5 mb-0 bg-light text-center" id="inicio">
	<h1 class="display-4 text-center">Vision</h1>
	<p class="lead text-center">Vamos te ajudar a se guiar</p>
	<a class="btn btn-cor btn-lg" href="#buscar" role="button">Ir para busca</a>
</header>

<section class="container jumbotron jumbotron-fluid mb-0 pt-5 bg-cor" id="buscar">
	<h2 class="display-4 text-center text-white">Locais</h2>
	<p class="lead text-center text-white">Escolha onde quer chegar</p>
	<div class="text-center mb-4">
		<button class="btn btn-branco btn-lg" id="btnLocais">Encontrar local</button>
	</div>

	<div class="pt-2" id="locais">
		<hr>
		<button class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">Sala de aula</button>
		<hr>
		<button class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">Protocolo</button>
		<hr>
		<button class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">Refeitório</button>
		<hr>
		<button class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">Labin 1</button>
		<hr>
		<button class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">LADES</button>
	</div>
</section>

<section class="jumbotron jumbotron-fluid py-5 mb-0 bg-light text-center" id="inicio">
	<h1 class="display-4 text-center">Vision</h1>
	<p class="lead text-center">Vamos te ajudar a se guiar</p>
	<a class="btn btn-cor btn-lg" href="#buscar" role="button">Ir para busca</a>
</section>


<?php

include("footer.php");

?>