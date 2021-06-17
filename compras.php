<?php  
// incluindo bd
	include_once("conexao.php");
// começando a sessão
	session_start();
// protege a pagina privada
// se o usuário não estiver logado e tentar acessar esta pagina ele será redimencionado para o pagina de login
	if (!isset($_SESSION['logado'])) {
		header('Location: login.php');
	}
// recebendo o id do usuário da pagina de login
	$id = $_SESSION['id_usuario'];
// fazendo uma consulta para selecionando o usuário com o id recebido
	$sql = "SELECT * FROM cadastro WHERE idcadastro = '$id' LIMIT 1";
// pegando o resultado do select
	$resultado = mysqli_query($connect, $sql);
// passando esse resultado para um array
	$dados = mysqli_fetch_array($resultado);

// verificando se foram recebidos os parametros do $_POST['pedido']
	if (isset($_POST['pedido'])) {
// criando array para imprimir mensagens
		$erros = array();
		$compras = array();
		$precos = array();
		$lanches = array();
// passando os dados do $_POST['pedido'] para a variavel $pedido
		$pedido = $_POST['pedido'];
// se o usuário efetura um pedido, a variavel $compras[] irá armazenar a seguinte mensagem "Pedido(s)"
		$compras[] = "Pedido(s)";
// passando os elementos do array para fazer uma verificação no foreach
		foreach ($pedido as $key => $value) {
// selecionando o nome_lanche, preco no bd
			$select = mysqli_query($connect,"SELECT nome_lanche, preco FROM cardapio WHERE idcardapio = '$value'");
// verificando os elementos o select
			while ($linha = mysqli_fetch_array($select)) {
// passando o retorno do select para os array
				$lanches[] = $linha['nome_lanche'];
				$precos[] = number_format($linha['preco'],2);
			}
		}
	}else{
// se o usuário não efetura um pedido, a variavel $erros[] irá armazenar a seguinte mensagem "Para efetuar seu pedido, primeiro você deve selecionar ao menos 1 item"
		$erros[] = "<li> Para efetuar seu pedido, primeiro você deve selecionar ao menos 1 item </li>";
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Compras</title>
	
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
	<div class="container-fluid compras">
<!-- menu -->
		<header>
			<nav class="navbar fixed-top navbar-expand-lg py-0 pl-4 navbar-light no-margin">
<!-- d-none d-sm-block: Faz com que a frase permaneca enquanto a resolução for >= 576px --> 
				<a class="navbar-brand font-weight-bold d-none d-sm-block logo-compra" href="#background">Bem vindo(a): 
<!-- printando o nome do usuario atraves da variavel $dados[]; -->				 
<?php  
	echo $dados['nome'];
?>
				</a>
<!-- d-sm-none d-block: Faz com que a frase permaneca enquanto a resolução for <= 576px --> 
				<a class="navbar-brand font-weight-bold d-sm-none d-block logo-compra-sm" href="#background">
<!-- printando o nome do usuario atraves da variavel $dados[]; -->
<?php  
	echo $dados['nome'];
?>					
				</a> 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="menu-principal">
			    	<ul class="navbar-nav ml-lg-auto">
				      	<li class="nav-item active">
				       		<a class="nav-link" href="#pedido">Lanches<span class="sr-only">(current)</span></a>
				     	</li>
					    	<li class="nav-item">
					        <a class="nav-link" href="logout.php">Sair</a>
					    </li>
			    	</ul>
				</div>
			</nav>
		</header>
<!-- Fim do menu -->
<!-- Background principal -->
		<div class="row"  id="background">
			<div class="col-lg-12 text-center">
				<figure class="no-margin d-none d-md-block fundo-principal">
					<img class="img-fluid d-none d-sm-block" style="width: 100%;" src="imagens/capa.jpg" alt="">
					<img class="img-fluid d-sm-none d-block" src="imagens/capa.jpg" alt="">
				</figure>
				<figure class="no-margin d-md-none d-block fundo-principal-compra">
					<img class="img-fluid d-none d-sm-block" style="width: 100%;" src="imagens/capa.jpg" alt="">
					<img class="img-fluid d-sm-none d-block" src="imagens/capa.jpg" alt="">
				</figure>
			</div>
		</div>
<!-- Fim do background principal -->
<!-- Compras -->
		<section class="container" id="pedido">
            <div class="row" style="padding-top: 4rem;">
            	<div class="col-md-12 text-center d-none d-md-block Pedido">
            		<h2>Faça seu pedido</h2>
            	</div>
            	<div class="col-md-12 text-center d-md-none d-block Pedido-pequeno">
            		<h2>Faça seu pedido</h2>
            	</div>
				<form class="col-12" action="#compras" method="POST">
				 	<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Burguer</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Burguer'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="1"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="1"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- -------------------------------------------------------------- -->	
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Salada</h3>
				      		<p>Pão, Hamburguer, Queijo Prato, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Salada'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="2"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="2"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->										<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Egg</h3>
				      		<p>Pão, Hamburguer, Queijo Prato, Ovo, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="3"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="3"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Calabresa</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Calabresa'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="4"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="4"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Bacon</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Bacon, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Bacon'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="5"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="5"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Calabresa Egg</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Calabresa, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Calabresa Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>				
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="6"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="6"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Bacon Egg</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Bacon, Ovo.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Bacon Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>					
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="7"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="7"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Big Egg</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Calabresa, Ovo, Presunto, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Big Egg'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>				
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="8"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="8"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- ------------------------------------------------------ -->
					<div class="form-row">
				    	<div class="form-group col-md-8 hamburgueres">
				      		<h3>X-Tudo</h3>
				      		<p>Pão, Hambúrguer, Queijo Prato, Bacon, Calabresa, Ovo, Presunto, Salada.</p>
				      		<h4>R$
<!-- fazendo um select no bd para receber o preço do lanche -->
<?php 
	$select = mysqli_query($connect,"SELECT preco FROM cardapio WHERE nome_lanche = 'X-Tudo'");
	while ($linha = mysqli_fetch_array($select)) {
		echo number_format($linha['preco'],2);
	}
?>				
							</h4>
				    	</div>
				    	<div class="form-group col-md-4">
						    <div class="form-check d-none d-md-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="9"> Adicionar pedido
						    </div>
						    <div class="form-check-md d-md-none d-block text-center">
						      	<input type="checkbox" name="pedido[]" id="produto" value="9"> Adicionar pedido
						    </div>
						</div>
					</div>
<!-- -------------------------------------------------------- -->
					<div class="row justify-content-center">
						<div class="col-md-4 pedir">
							<input type="submit" class="btn btn-outline-danger" style="border-radius: 1px; font-weight: 700;" name="btn-teste" value="Selecionar">
						</div>
					</div>		
				</form>
			</div>
		</section>
<!-- Fim das compras -->
<!-- total das compras -->
		<section class="row justify-content-center" id="compras">
			<div class="form-group col-md-8 d-none d-md-block" style="padding-top: 4rem;">
<!-- irá imprimir uma mensagem se o usuário clicar no botão e nao selecionar nem um item -->
				<div class="hamburgueres" style="padding-left: 10px;">
<?php 
	if (!empty($erros)) {
		foreach ($erros as $erro){ 
			echo $erro;
		}
	}
?>	
<!-- irá printar a pagina de pedidos -->			
					<h3 class="text-center ">					
<?php  
	if (!empty($compras)) {
		foreach ($compras as $compra) {
			echo $compra;
		}
	}
?>
					</h3>
					<h5>
<?php  
	$resultado = 0;
// irá printar os nomes dos lanches	
	if (!empty($lanches)) {
		foreach ($lanches as $lanche) {
			echo $lanche."<br>";
		}
		echo "<br>";
// irá printar o lavor total do pedido		
	if (!empty($precos)) {                
	    $qtd = count($precos);
	    for ($i = 0; $i < $qtd; $i++) {
	        $valor = $precos[$i];
	        $resultado += $valor;
	       }   
	    echo "Valor total do pedido R$: ".number_format($resultado,2);
		}
	}
?>
					</h5>
				</div>
			</div>
<!-- ---------------------------------------------------------------------- -->	
			<div class="form-group-md col-md-8 d-md-none d-block" style="padding-top: 3rem;">
<!-- irá imprimir uma mensagem se o usuário clicar no botão e nao selecionar nem um item -->
				<div class="hamburgueres" style="padding-left: 10px;">
<?php 
	if (!empty($erros)) {
		foreach ($erros as $erro){ 
			echo $erro;
		}
	}
?>	
<!-- irá printar a pagina de pedidos -->			
					<h3 class="text-center ">					
<?php  
	if (!empty($compras)) {
		foreach ($compras as $compra) {
			echo $compra;
		}
	}
?>
					</h3>
					<h5>
<?php  
	$resultado = 0;
// irá printar os nomes dos lanches	
	if (!empty($lanches)) {
		foreach ($lanches as $lanche) {
			echo $lanche."<br>";
		}
		echo "<br>";
// irá printar o lavor total do pedido		
	if (!empty($precos)) {                
	    $qtd = count($precos);
	    for ($i = 0; $i < $qtd; $i++) {
	        $valor = $precos[$i];
	        $resultado += $valor;
	       }   
	    echo "Valor total do pedido R$: ".number_format($resultado,2);
		}
	}
?>
					</h5>
				</div>	
			</div>
		</section>		
<!-- fim do total das compras -->
<!-- ----------------------------------------------------------------------- -->
		<div class="text-center pedir-md">
	  		<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalComprar">Comprar</button>
		</div>	
		<div class="modal fade" id="modalComprar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		  aria-hidden="true">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="modal-body mb-0 p-0">
			        	<div class="z-depth-1-half map-container-9" style="height: 400px">
			        		<div class="row justify-content-center">
			        			<div class="form-group col-md-8 d-none d-md-block" style="padding-top: 4rem;">
									<div class="comprar" style="padding-left: 10px;">			
										<h3 class="text-center">Finalizar pedido</h3>
										<h5>
<?php  
	$resultado = 0;
// irá printar os nomes dos lanches	
	if (!empty($lanches)) {
		foreach ($lanches as $lanche) {
			echo $lanche."<br>";
		}
		echo "<br>";
// irá printar o lavor total do pedido		
	if (!empty($precos)) {                
	    $qtd = count($precos);
	    for ($i = 0; $i < $qtd; $i++) {
	        $valor = $precos[$i];
	        $resultado += $valor;
	       }   
	    echo "Valor total do pedido R$: ".number_format($resultado,2);
		}
	}
?>
										</h5>
									</div>
								</div>
								<div class="form-group-md col-md-8 d-md-none d-block" style="padding-top: 3rem;">
									<div class="comprar" style="padding-left: 10px;">			
										<h3 class="text-center">Finalizar pedido</h3>
										<h5>
<?php  
	$resultado = 0;
// irá printar os nomes dos lanches	
	if (!empty($lanches)) {
		foreach ($lanches as $lanche) {
			echo $lanche."<br>";
		}
		echo "<br>";
// irá printar o lavor total do pedido		
	if (!empty($precos)) {                
	    $qtd = count($precos);
	    for ($i = 0; $i < $qtd; $i++) {
	        $valor = $precos[$i];
	        $resultado += $valor;
	       }   
	    echo "Valor total do pedido R$: ".number_format($resultado,2);
		}
	}
?>
										</h5>
									</div>	
								</div>
							</div>
			        	</div>
			      	</div>			      	
			      	<div class="modal-footer justify-content-center localizacao-mapa">
			        	<button type="button" class="btn btn-outline-danger btn-md" data-dismiss="modal">Finalizar<i class="fas fa-times ml-1"></i></button>
			      	</div>
			    </div>
		  	</div>
		</div>
<!-- ----------------------------------------------------------------------- -->
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
								<li><a href="#pedido">Lanche</a></li>
								<li><a href="logout.php">Sair</a></li>
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
							<p>Ficamos satisfeitos em ter você conosco, aproveite nossos lanches.</p>
							<div class="inscrever">
								<a href="logout.php" class="btn btn-outline-danger">Sair</a>
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