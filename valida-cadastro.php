<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Dungeon Burguer</title>
	
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
		<section class="cadastre-se" id="cadastro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 dados">
						<h2>Cadastre - se!</h2>
					</div>
					<form action="valida-cadastro.php" method="POST" class="col-md-8 cadastrar">
						<div class="form-row">
						    <div class="form-group col-md-5">
						      <label for="inputNome">Nome</label>
						      <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Seu nome completo" required>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputCpf">CPF</label>
						      <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="Ex: 000.000.000-00" maxlength="15" required>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputNascimento">Nascimento</label>
						      <input type="date" class="form-control" name="data" id="inputNascimento" required>
						    </div>				    
						</div>
					  	<div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail">Email</label>
						      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Digite o seu email" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword">Senha</label>
						      <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Digite a sua senha" required>
						    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="inputAddress">Endereço</label>
						    <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua dos Bobos, nº 0" required>
					  	</div>
					  	<div class="form-row">
						    <div class="form-group col-md-6">
							    <label for="inputCity">Cidade</label>
							    <input type="text" class="form-control" name="cidade" id="inputCity"placeholder="Sua cidade" required>
					    	</div>
						    <div class="form-group col-md-2">
							    <label for="inputCEP">CEP</label>
							    <input type="text" class="form-control" name="cep" id="inputCEP"placeholder="00000-000" maxlength="9" required>
						    </div>
						    <div class="form-group col-md-4">
							    <label for="inputFone">Telefone</label>
							    <input type="text" class="form-control" name="telefone" id="inputFone"placeholder="(xx) xxxxx-xxxx" required>
						    </div>
					  	</div>
					  	<div class="botoes-cadastrar">
								<input type="submit" value="Cadastrar-se" class="btn btn-outline-success enviar">
								<input type="reset" value="Limpar" class="btn btn-outline-dark limpar">
						</div>
					</form>
					<div class="col-md-4 text-center d-none d-sm-block logar">
						<h5>Se você já possui uma conta, basta clicar no botão de login:</h5>
						<div class="inscrever">
								<a href="login.html#login" class="btn btn-outline-danger">Login</a>
						</div>
					</div>
					<div class="col-md-4 text-center d-sm-none d-block logar-pequeno">
						<h5>Se você já possui uma conta, basta clicar no botão de login:</h5>
						<div class="inscrever">
								<a href="login.html#login" class="btn btn-outline-danger">Login</a>
						</div>
					</div>
				</div>
			</div>
		</section>
				<!-- footer start -->
		<footer id="footer" class="no-margin">
			<div class="footer-top text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 footer-info">
							<h3>Dungeon Burguer</h3>
							<p>Obrigado por nos visitar, nós da <span>Dungeon Burguer</span> estamos honrados com sua presença.</p>
						</div>
						<div class="col-lg-2 col-md-6 footer-links">
							<h4>Menu</h4>
							<ul>
								<li><a href="#background">Dungeon Burguer</a></li>
								<li><a href="#quem_somos">Quem Somos</a></li>
								<li><a href="#contato">Contato</a></li>
								<li><a href="cardapio.php">Cardápio</a>
								<li><a href="login.php">Login</a></li>
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
							<p>Possui uma conta?</p>
							<div class="inscrever">
								<a href="#" class="btn btn-outline-light">Logar</a>
								<a href="#cadastro" class="btn btn-outline-danger">Inscreva-se</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright no-margin">
			&copy; Trabalho sistemas de Informação 5º Periodo
		</div>
		<!-- end of footer -->
	</div>
</body>
</html>		
<?php  
// criando um alert para o cadastro bem sucedido
  	echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='login.php#login';</script>";

?>