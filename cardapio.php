<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cardapio</title>
	
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
				<a class="navbar-brand font-weight-bold d-sm-none d-block logo-sm" href="index.php#background">Dungeon Burguer</a>
				<!-- d-sm-none d-block: Faz com que a frase permaneca enquanto a resolução for <= 576px -->  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Toggle navigation">
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
					        <a class="nav-link" href="cardapio.php">Cardápio</a>
					    </li>
					    	<li class="nav-item">
					        <a class="nav-link" href="cadastro.php">Cadastrar</a>
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
		<!-- Fim background principal -->
		<section class="cardapio-post-sectio no-margin"> 
				<div class="row">
					<div id="Hamburguer" class="col-md-12 text-center testo-principal">
						<h3 class="d-none d-md-block"><img src="imagens/bandeira_esquerda.png" alt="">Cardápio<img src="imagens/bandeira_direita.png" alt=""></h3>
						<h3 class="d-md-none d-block"><img src="imagens/bandeira_esquerda_pequena.png" alt="">Cardápio<img src="imagens/bandeira_direita_pequena.png" alt=""></h3>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Burguer'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Burguer-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Burguer</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Burguer-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Burguer</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Salada'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>	
									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Salada-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Salada</h2>
										<p class="testo-fultuante">Pão, Hamburguer, Queijo Prato, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Salada-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Salada</h2>
										<p class="testo-fultuante">Pão, Hamburguer, Queijo Prato, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>	
								</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Egg-mini.png" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Egg</h2>
										<p class="testo-fultuante">Pão, Hamburguer, Queijo Prato, Ovo, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Egg-mini.png" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Egg</h2>
										<p class="testo-fultuante">Pão, Hamburguer, Queijo Prato, Ovo, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Calabresa'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>	
									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Calabresa-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Calabresa</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Calabresa-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Calabresa</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Bacon'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>	
									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Bacon-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Bacon</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Bacon-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Bacon</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Calabresa Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>	
									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Calabresa-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Calabresa Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Calabresa-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Calabresa Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Bacon Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>									</h3>  
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Bacon-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Bacon Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Ovo.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Bacon-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Bacon Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Ovo.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Big Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Big-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Big Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Ovo, Presunto, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Big-Egg-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Big Egg</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Calabresa, Ovo, Presunto, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cardapio"> 
							<div class="capa"> 
								<img src="imagens/fundo-cardapio.jpg" class="d-none d-lg-block" style="width: 100%;" alt="">
								<img src="imagens/fundo-cardapio.jpg" class="d-lg-none d-block" alt="">
							</div>
							<div class="entrada-flutua"> 
								<div class="capa-flutuante real"> 
									<h3 class="nome">R$
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Tudo'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>									</h3> 
									<div class="informacao d-none d-lg-block"> 
										<img src="imagens/X-Tudo-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Tudo</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Calabresa, Ovo, Presunto, Salada.</p> 
									</div>
									<div class="informacao1 d-lg-none d-block"> 
										<img src="imagens/X-Tudo-mini.jpg" alt="">
										<p class="ingredientes d-none d-xl-block"></p> 
										<h2>X-Tudo</h2>
										<p class="testo-fultuante">Pão, Hambúrguer, Queijo Prato, Bacon, Calabresa, Ovo, Presunto, Salada.</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!-- --------------------------------------------------------------- -->
		<section class="faca-voce-mesmo">
			<div class="row">
				<div class="col-md-12 text-center face-voce">
					<h2 class="d-none d-md-block"><img src="imagens/bandeira_esquerda.png" alt=""> Faça você mesmo <img src="imagens/bandeira_direita.png" alt=""></h2>
					<h3 class="d-md-none d-block"><img class="imga1" src="imagens/bandeira_esquerda.png" alt="">Faça você mesmo<img class="imga1" src="imagens/bandeira_direita.png" alt=""></h3>
				</div>
					
				<table class="table table-striped table-dark">
				  <tbody>
				    <tr>
				    	<th scope="col">Pão</th>
				    	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Pao'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				    	</td>
				    	<th scope="col">Milho</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Milho'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				  		</td>
				    </tr>
				    <tr>
				      	<th scope="col">Hamburguer 80g</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Hamburguer 80g'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Barbecue</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Barbecue'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				    	</td>
				    </tr>
				    <tr>
				      	<th scope="col">Hamburguer 120g</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Hamburguer 120g'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Mussarela</th>
				     	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Mussarela'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				     	</td>
				    </tr><tr>
				      	<th scope="col">Hamburguer 200g</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Hamburguer 200g'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Presunto</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Presunto'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				    </tr><tr>
				      	<th scope="col">Salada</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Salada'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Queijo Prado</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Queijo Prado'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				     	</td>
				    </tr><tr>
				      	<th scope="col">Bacon</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Bacon'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Ovo</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Ovo'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				    </tr><tr>
				      	<th scope="col">Calabresa</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Calabresa'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Batata Palha</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Batata Palha'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				    </tr>
				    </tr><tr>
				      	<th scope="col">Cheddar</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Cheddar'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				      	<th scope="col">Cebola</th>
				      	<td>R$ 
<?php 
	include_once("conexao.php");

	$select = mysqli_query($connect,"SELECT preco FROM ingredientes WHERE nome_ingrediente = 'Cebola'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}

?>
				      	</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</section>
		<!-- --------------------------------------------------------------- -->
		<!-- Fim do menu -->
		<!-- footer start -->
		<footer id="footer" class="no-margin">
			<div class="footer-top text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 footer-info">
							<h3>Dungeon Burguer</h3>
							<p>Obrigado por nos visitar, nós da <span>Dungeon Burguer</span> estamos honrados com sua presença.</p>
<!-- --------------------------Localização----------------------------------- -->
							<div class="text-center localizacao">
						  		<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalRegular">Localização</button>
							</div>	
							<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
							  aria-hidden="true">
							  	<div class="modal-dialog modal-lg" role="document">
								    <div class="modal-content">
								      	<div class="modal-body mb-0 p-0">
								        	<div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
								        		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d926.2492133054618!2d-45.8441218!3d-21.7803828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca416a73baeb77%3A0xcfe3d27176011cdb!2sSorveteria+Do+Ze+Roberto!5e0!3m2!1spt-BR!2sbr!4v1559491609268!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
								        	</div>
								      	</div>
								      	<div class="modal-footer justify-content-center localizacao-mapa">
								        	<button type="button" class="btn btn-outline-danger btn-md" data-dismiss="modal">Fechar <i class="fas fa-times ml-1"></i></button>
								      	</div>
								    </div>
							  	</div>
							</div>
<!-- --------------------------Localização----------------------------------- -->
						</div>
						<div class="col-lg-2 col-md-6 footer-links">
							<h4>Menu</h4>
							<ul>
								<li><a href="index.html#background">Dungeon Burguer</a></li>
								<li><a href="index.html#quem_somos">Quem Somos</a></li>
								<li><a href="index.html#contato">Contato</a></li>
								<li><a href="cardapio.php">Cardápio</a>
								<li><a href="cadastro.php">Cadastrar</a></li>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 footer-contact">
							<h4>Contate-nos</h4>
							<p>
								<strong>Rua:</strong> Rua Emílio Antônio Pereira<br> 
								<strong>Cidade:</strong> Carvalhopolis <br>
								<strong>Telefone:</strong> (35) 99755-5349<br>
								<strong>Email:</strong> DungeonBurguer@gmail.com<br>
							</p>
							<div class="social-links">
								<ul>
									<a target="_brack" href="https://www.facebook.com/Dungeon-Burguer-Sorveteria-do-Z%C3%A9-Roberto-178614732821062/"><span class="fab fa-facebook-f facebook"></span></a>
									<a target="_brack" href="https://www.instagram.com/dungeonburguer/"><span class="fab fa-instagram instagram"></span></a>
								</ul>	
							</div>
						</div>
						<div class="col-lg-3 col-md-6 dungeon">
							<h4>Dungeon Burguer</h4>
							<p>Os melhores hambúrgueres artesanais a um clique de você!</p>
							<p><strong>Possui uma conta?</strong></p>
							<div class="inscrever">
								<a href="login.php#login" class="btn btn-outline-light">Logar</a>
								<a href="cadastro.php#cadastro" class="btn btn-outline-danger">Inscrever</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright no-margin">
			&copy; Sistemas de Informação 5º Periodo
		</div>
		<a href="#top" class="fas fa-angle-double-up"></a>
<!-- criando uma function para o icon fas fa-angle-double-up levar o usuário ao topo da pagina -->
		<script>
			$(document).ready(function(){
   				$(window).scroll(function(){
        			if ($(this).scrollTop() > 100) {
            			$('a[href="#top"]').fadeIn();
        			} else {
            			$('a[href="#top"]').fadeOut();
        			}
    			});
    		$('a[href="#top"]').click(function(){
        	$('html, body').animate({scrollTop : 0},800);
        	return false;
    		});
		});
		</script>
	</div>
</body>
</html>