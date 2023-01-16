<!DOCTYPE html>
<html lang="pt_BR" data-theme="light" style="color-scheme:light;"/>
<head>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="css/template.css" rel="stylesheet"/>
	<title>Project 5 | Cars</title>
	<!----------Tags SEO Google--------->
	<meta charset="UTF-8"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="copyright" content="" />
	<meta name="google-site-verification" content="...">
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content=""/>
	<meta name="google" content="nositelinkssearchbox">
	<meta name="googlebot" content="notranslate">
	<meta name="google" content="nopagereadaloud">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="viewport" content="width=device-width"/>
	<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
	<meta name="author" content="Bruno Santana"/>
	<meta name="description" content=""/>
	<meta name="keyowords" content=""/>
	<!----------Tags SEO Facebook--------->
	<meta property="og:url"                content="" />
	<meta property="og:type"               content="landing Page" />
	<meta property="og:title"              content="" />
	<meta prHow much does culture influence creative thinking?" />
	<meta property="og:image"              content="" />
	<!----------Tags SEO Twitter--------->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:creator" content="" />
	<meta property="og:url" content="" />
	<meta property="og:title" content="A Twitter for My Sister" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<!----------Links de Style--------->
	
</head>
<body>

<header style="border-bottom: 3px solid #EB2D2D;">

	<div class="container">
		<div class="logo">
			<h2>Bdeveloper</h2>
			<!--<img src="imagens/logob.jpg" />-->
		</div><!--logo-->

		<nav class="desktop">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="venda">Venda</a></li>
				<li><a href="sobre">Sobre</a></li>
				<li><a goto="contato" href="">Contato</a></li>
			</ul>
			<div class="claer"></div>
		</nav><!--desktop-->
		
		<nav class="mobile">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="venda">Venda</a></li>
				<li><a href="sobre">Sobre</a></li>
				<li><a goto="contato" href="">Contato</a></li>
			</ul>
		</nav><!--mobile-->

		<div class="clear"></div>
	</div><!--container-->
</header>
<?php
	if(isset($_GET['url'])){
		if(file_exists($_GET['url']).'.html'){
			include($_GET['url'].'.html');
		}else{
			include('404.html');
		}
	}else{
		include('home.html');
	}
?>


<footer>
	<div class="container">
	<nav>
		<ul>
			<li><a href="home">Home</a></li>
			<li><a href="venda">Venda</a></li>
			<li><a href="sobre">Sobre</a></li>
			<li><a goto="contato" href="">Contato</a></li>
		</ul>
	</nav>
	<p>Todos os direitos reservados</p>
	<div class="clear"></div>
	</div><!--container-->
</footer>
<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>
</body>
</html>