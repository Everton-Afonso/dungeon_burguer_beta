-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.19 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para dungeon-burguer
CREATE DATABASE IF NOT EXISTS `dungeon-burguer` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dungeon-burguer`;

-- Copiando estrutura para tabela dungeon-burguer.cadastro
CREATE TABLE IF NOT EXISTS `cadastro` (
  `idcadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  PRIMARY KEY (`idcadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.cadastro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.cardapio
CREATE TABLE IF NOT EXISTS `cardapio` (
  `idcardapio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_lanche` varchar(30) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`idcardapio`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.cardapio: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
INSERT INTO `cardapio` (`idcardapio`, `nome_lanche`, `preco`) VALUES
	(1, 'X-Burguer', 7),
	(2, 'X-Salada', 8),
	(3, 'X-Egg', 10),
	(4, 'X-Calabresa', 12),
	(5, 'X-Bacon', 13),
	(6, 'X-Calabresa Egg', 14),
	(7, 'X-Bacon Egg', 15),
	(8, 'X-Big Egg', 14.5),
	(9, 'X-Tudo', 16);
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `lanche` varchar(150) NOT NULL,
  `cadastro_idcadastro` int(11) NOT NULL,
  PRIMARY KEY (`idcompra`,`lanche`,`cadastro_idcadastro`),
  KEY `fk_compra_cadastro1_idx` (`cadastro_idcadastro`),
  CONSTRAINT `fk_compra_cadastro1` FOREIGN KEY (`cadastro_idcadastro`) REFERENCES `cadastro` (`idcadastro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.compra: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `idfeedback` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`idfeedback`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.feedback: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.ingredientes
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `idingredientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ingrediente` varchar(45) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`idingredientes`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.ingredientes: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `ingredientes` DISABLE KEYS */;
INSERT INTO `ingredientes` (`idingredientes`, `nome_ingrediente`, `preco`) VALUES
	(1, 'Pao', 1.5),
	(2, 'Milho', 1),
	(3, 'Hamburguer 80g', 3),
	(4, 'Barbecue', 3),
	(5, 'Hamburguer 120g', 3.5),
	(6, 'Mussarela', 2.5),
	(7, 'Hamburguer 200g', 5),
	(8, 'Presunto', 2.5),
	(9, 'Salada', 1.5),
	(10, 'Queijo Prado', 3.5),
	(11, 'Bacon', 3.5),
	(12, 'Ovo', 1.5),
	(13, 'Calabresa', 3),
	(14, 'Batata Palha', 1.5),
	(15, 'Cheddar', 2),
	(16, 'Cebola', 1);
/*!40000 ALTER TABLE `ingredientes` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.mensagem
CREATE TABLE IF NOT EXISTS `mensagem` (
  `idmensagem` int(11) NOT NULL AUTO_INCREMENT,
  `cadastro_idcadastro` int(11) NOT NULL,
  `feedback_idfeedback` int(11) NOT NULL,
  PRIMARY KEY (`idmensagem`,`cadastro_idcadastro`,`feedback_idfeedback`),
  KEY `fk_mensagem_cadastro1_idx` (`cadastro_idcadastro`),
  KEY `fk_mensagem_feedback1_idx` (`feedback_idfeedback`),
  CONSTRAINT `fk_mensagem_cadastro1` FOREIGN KEY (`cadastro_idcadastro`) REFERENCES `cadastro` (`idcadastro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagem_feedback1` FOREIGN KEY (`feedback_idfeedback`) REFERENCES `feedback` (`idfeedback`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.mensagem: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;

-- Copiando estrutura para tabela dungeon-burguer.montar_lanche
CREATE TABLE IF NOT EXISTS `montar_lanche` (
  `idmontar_lanche` int(11) NOT NULL AUTO_INCREMENT,
  `ingredientes_idingredientes` int(11) NOT NULL,
  `cadastro_idcadastro` int(11) NOT NULL,
  PRIMARY KEY (`idmontar_lanche`,`ingredientes_idingredientes`,`cadastro_idcadastro`),
  KEY `fk_montar_lanche_ingredientes_idx` (`ingredientes_idingredientes`),
  KEY `fk_montar_lanche_cadastro1_idx` (`cadastro_idcadastro`),
  CONSTRAINT `fk_montar_lanche_cadastro1` FOREIGN KEY (`cadastro_idcadastro`) REFERENCES `cadastro` (`idcadastro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_montar_lanche_ingredientes` FOREIGN KEY (`ingredientes_idingredientes`) REFERENCES `ingredientes` (`idingredientes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela dungeon-burguer.montar_lanche: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `montar_lanche` DISABLE KEYS */;
/*!40000 ALTER TABLE `montar_lanche` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
