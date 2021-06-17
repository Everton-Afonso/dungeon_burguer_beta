<?php  

	include_once("conexao.php");
	session_start();

	if (isset($_POST['btn-cadastrar'])) {
		$erros = array();

		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$cpf = mysqli_escape_string($connect, $_POST['cpf']);
		$data = mysqli_escape_string($connect, $_POST['data']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$senha = mysqli_escape_string($connect, $_POST['senha']);
		$endereco = mysqli_escape_string($connect, $_POST['endereco']);
		$cidade = mysqli_escape_string($connect, $_POST['cidade']);
		$cep = mysqli_escape_string($connect, $_POST['cep']);
		$telefone = mysqli_escape_string($connect, $_POST['telefone']);


		if (empty($nome) or empty($cpf) or empty($data) or empty($email) or empty($senha) or empty($endereco) or empty($cidade) or empty($cep) or empty($telefone)) {
			$erros[] = "<li> Todos os campo devem ser preenchido </li>";
		}else{
			$sql = "SELECT email FROM cadastro WHERE email = '$email' LIMIT 1";
			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado) == 0){
				$data = date("Y-m-d",strtotime(str_replace('/', '-', $data)));
				$senha = md5($senha);

				$insert = "INSERT INTO cadastro (nome, cpf, nascimento, email, senha, endereco, cidade, cep, telefone) VALUES ('$nome', '$cpf', '$data', '$email', '$senha', '$endereco', '$cidade', '$cep', '$telefone')";
				if(mysqli_query($connect, $insert)){
  					header('Location: valida-cadastro.php');
  					mysqli_close($connect);
				}else {
					$erros[] = "<li> Não foi possivel realizar o cadastro.</li>";
				}
			}else{
				$erros[] = "<li> Já existe um usuario com este email, por favor tente outro.</li>";
			}
		}
	}

?>
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
					        <a class="nav-link" href="login.php">Logar</a>
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
			<div class="container" style="padding-top: 1.5rem;">
				<div class="row">
					<div class="col-md-12 col-sm-12 dados">
						<h2>Cadastre - se!</h2>
<?php  

	if (!empty($erros)) {
		foreach ($erros as $erro){
			echo $erro;
		}
	}

?>
					</div>
					<form action="#cadastro" method="POST" class="col-md-8 cadastrar" autocomplete="off">
						<div class="form-row">
						    <div class="form-group col-md-5">
						      <label for="inputNome">Nome</label>
						      <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Seu nome completo">
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputCpf">CPF</label>
						      <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="Ex: 000.000.000-00" maxlength="15">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputNascimento">Data de cadastro</label>
						      <input type="date" class="form-control" name="data" id="inputNascimento">
						    </div>				    
						</div>
					  	<div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail">Email</label>
						      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Digite o seu email">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword">Senha</label>
						      <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Digite a sua senha">
						    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="inputAddress">Endereço</label>
						    <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
					  	</div>
					  	<div class="form-row">
						    <div class="form-group col-md-6">
							    <label for="inputCity">Cidade</label>
							    <input type="text" class="form-control" name="cidade" id="inputCity"placeholder="Sua cidade">
					    	</div>
						    <div class="form-group col-md-2">
							    <label for="inputCEP">CEP</label>
							    <input type="text" class="form-control" name="cep" id="inputCEP"placeholder="00000-000" maxlength="9">
						    </div>
						    <div class="form-group col-md-4">
							    <label for="inputFone">Telefone</label>
							    <input type="text" class="form-control" name="telefone" id="inputFone"placeholder="(xx) xxxxx-xxxx">
						    </div>
					  	</div>
					  	<div class="botoes-cadastrar">
								<input type="submit" value="Cadastrar-se" name="btn-cadastrar" class="btn btn-outline-success enviar">
								<input type="reset" value="Limpar" class="btn btn-outline-dark limpar">
						</div>
					</form>
					<div class="col-md-4 text-center d-none d-sm-block logar">
						<h5>Se você já possui uma conta, basta clicar no botão de login:</h5>
						<div class="inscrever">
								<a href="login.php#login" class="btn btn-outline-danger">Login</a>
						</div>
					</div>
					<div class="col-md-4 text-center d-sm-none d-block logar-pequeno">
						<h5>Se você já possui uma conta, basta clicar no botão de login:</h5>
						<div class="inscrever">
								<a href="login.php#login" class="btn btn-outline-danger">Login</a>
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
							<p><strong>Possui uma conta?</strong><br> faça se login abaixo</p>
							<i class="far fa-hand-point-down" style="font-size: 25px; padding-bottom: 15px;"></i>
							<div class="inscrever">
								<a href="login.php#login" class="btn btn-outline-light">Logar</a>
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
		<!-- end of footer -->
	</div>
</body>
</html>		