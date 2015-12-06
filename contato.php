<!DOCTYPE html>
<html>
	<head>
		<title> Contato </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Botstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
	
		<ul class="nav nav-tabs navbar-fixed-top">
		  <li><a href="index.html" class="branco"> Home </a></li>
		  <li><a href="sobre.html" class="branco"> Sobre </a></li>
		  <li><a href="galeria.html" class="branco"> Galeria </a></li>
		  <li><a href="slides.html" class="branco"> Slides </a></li>
		  <li class="active"><a href="contato.html" class="branco"> Contato </a></li>
		</ul>
		<div class="container">
			<header>
				<h1> Obrigada pela visita! </h1>
			</header>
			
			<div class="row">
				<div role="main" class="col-md-8">
				<h2> Contato </h2>
				<form action="dados.php" name="formulario" method="post">
					<div class="form-group">
						<label for="imputName"> Seu nome </label>
						<input type="text"  placeholder="Seu Nome" class="form-control" name="campo_nome" id="imputName">
					</div>
					
					<div class="form-group">
						<label for="imputEmail"> Seu E-mail </label>
						<input type="email" placeholder="fulano@gmail.com" name="campo_email" class="form-control" id="imputEmail"> </imput>
					</div>
					
					<div class="form-group">
						<label for="imputSubject"> Assunto </label>
						<input type="text" placeholder="Seu Assunto" class="form-control" id="imputSubject">
					</div>
					
					<div class="form-group">
						<label for="textMessage"> Mensagem </label>
						<input type="textMessage" placeholder="Sua mensagem" class="form-control" rows="10"> </textarea>
					</div>
					
					<button typw="submit" class="btn btn-defalt"> Enviar </button>
					
				</div> <!--  Main -->
				
				<aside role="complementary" class="col-md-4">
					<div id="widget-about" class="panel panel-default">
						<div class="panel-body">
							<h4> Info </h4>
							<p> Gostou do que viu? Fa�a contato! 
							</p>	
						</div> <!-- panel-body -->
					</div> <!-- widget-about -->
					
					<div id="widget-links" class="panel panel-default">
						<div class="panel-body">
							<h4> Links </h4>
							<ul class="list-unstyled">
								<li> <a href="#"> Github </a></li>
								<li> <a href="#"> Twitter </a></li>
								<li> <a href="#"> Facebook </a></li>
							</ul>
						</div>
					</div>
					
				</aside>
		</div> <!-- row -->
		
		<hr />
		<footer>
			<p class="text-muted">&copy; 2015 - web Dev Academyc </p>
		</footer>
			
		</div> <!-- container -->
		
		<script src="js/jquery.js"> </script>
		<script src="js/bootstrap.min.js"> </script>
	</body>
</html>