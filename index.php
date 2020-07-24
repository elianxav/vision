<?php
	
$title = "Vision";
$css = "index";
include("head.php");

?>

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
		<a href="salas.php" class="m-0 jumbotron jumbotron-fluid w-100 btn-cor btn">Sala de aula</a>
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


<?php

include("footer.php");

?>