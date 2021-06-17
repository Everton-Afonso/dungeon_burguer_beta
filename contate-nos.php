<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contato</title>
	
	<meta name="author" content="Emanuel Victor Barroso Leite; Everton Otavio Afonso; Marcos Antonio Gonçalves Junior">
	<meta name="description" content="Dungeon Burguer especialista em hambúrgueres artesanais de carne e frango">
	<meta name="keywords" content="hambúrgueres, carne, frango">
	<meta name="robots" content="index, follow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- area of CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- area of JavaScript -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>

	<!-- icon of favicon -->
	<link rel="shortcut icon" href="imagens/icon.jpg">
</head>
<body>
	<div class="container-fluid">
	<!-- menu -->
		<header>
			<nav class="navbar fixed-top navbar-expand-lg py-0 pl-4 navbar-light no-margin">
				<a class="navbar-brand font-weight-bold d-none d-sm-block logo" href="index.html#background">Dungeon Burguer</a>
				<!-- d-none d-sm-block: Faz com que a frase permaneca enquanto a resolução for >= 576px --> 
				<a class="navbar-brand font-weight-bold d-sm-none d-block logo-sm" href="index.html#background">Dungeon Burguer</a>
				<!-- d-sm-none d-block: Faz com que a frase permaneca enquanto a resolução for <= 576px -->  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="index.html#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="menu-principal">
			    	<ul class="navbar-nav ml-lg-auto">
				      	<li class="nav-item active">
				       		<a class="nav-link" href="index.html#quem_somos">Quem Somos<span class="sr-only">(current)</span></a>
				     	</li>
					    <li class="nav-item">
					        <a class="nav-link" href="index.html#contato">Contato</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="cardapio.html">Cardápio</a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="cadastro.html">Login</a>
					    </li>
			    	</ul>
				</div>
			</nav>
		</header>
		<!-- Fim do menu -->
		<!-- Background principal -->
			<div class="row">
				<div class="col-lg-12 text-center" id="background">
					<figure class="no-margin fundo-principal">
						<img class="img-fluid d-none d-sm-block" style="width: 100%;" src="imagens/capa.jpg" alt="">
						<img class="img-fluid d-sm-none d-block" src="imagens/capa.jpg" alt="">
					</figure>
				</div>
			</div>
		<!-- Fim do background principal -->
		<!-- Sobre nos -->
		<section class="jumbotron mb-0 lead no-margin" id="quem_somos">
		 	<div class="d-none d-sm-block">
		 		<!-- d-none d-sm-block: Faz com que a frase permaneca enquanto a resolução for >= 576px -->
		 		<img src="imagens/escudo.png" alt="">
				<h3 class="font-weight-bold">Sobre a Dungeon Burguer!</h3>
				<p>&emsp;Fundada em 2018, por Gabriel Teodoro, a Dungeon Burguer foi uma das primeiras lanchonetes em Carvalhópolis-MG a servir hambúrgueres artesanais, se tornando uma das maiores referências no segmento de humbúrgueres artesanais da cidade. Este ano, a empresa completa 1 ano de histórias e conquistas de um time que busca sempre evoluir nos quesitos agilidade, qualidade de atendimento, velocidade de entrega e respeito pelo consumidor.</p>
				<a href="contato.html" class="btn btn-outline-danger botao">Conheça o Dungeon Burguer</a>
			</div>
			<div class="d-sm-none d-block">
				<!-- d-sm-none d-block: Faz com que a frase permaneca enquanto a resolução for <= 576px -->
				<p class="font-weight-bold sobreTitulo">Sobre o Dungeon Burguer!</p>
				<p> &emsp;Fundada em 2018, por Gabriel Teodoro, a Dungeon Burguer foi uma das primeiras lanchonetes em Carvalhópolis-MG a servir hambúrgueres artesanais, se tornando uma das maiores referências no segmento de humbúrgueres artesanais da cidade. Este ano, a empresa completa 1 ano de histórias e conquistas de um time que busca sempre evoluir nos quesitos agilidade, qualidade de atendimento, velocidade de entrega e respeito pelo consumidor.</p>
				<a href="contato.php" class="btn btn-outline-danger botao1">Conheça a Dungeon Burguer</a>
			</div>
		</section>
		<!-- Fim do sobre nos -->
	</div>
</body>
</html>
<?php 
	include_once("conexao.php");

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$mensagem = mysqli_escape_string($connect, $_POST['mensagem']);

	$sql = "SELECT email FROM cadastro WHERE email = '$email' LIMIT 1";
	$resultado = mysqli_query($connect, $sql);

	if (mysqli_num_rows($resultado) > 0){
		$insert = "INSERT INTO feedback (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
		if(mysqli_query($connect, $insert)){
      		echo"<script language='javascript' type='text/javascript'>alert('Mensagem enviada sucesso!');window.location.href='index.html#contato';</script>";
    	}
	}else {
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel enviar a seguinte mensagem');window.location.href='index.html#contato'</script>";
	}
		mysqli_close($connect);
?>