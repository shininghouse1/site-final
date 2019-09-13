-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2019 às 16:47
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `shininghouse`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idcarrinho` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`idcarrinho`, `email`, `idproduto`, `qtd`) VALUES
(3, 'willian.santos064@gmail.com', 0, 1),
(4, 'willian.santos064@gmail.com', 0, 1),
(5, 'willian.santos064@gmail.com', 0, 1),
(6, 'willian.santos064@gmail.com', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `data` date NOT NULL,
  `comentario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`nome`, `email`, `data`, `comentario`) VALUES
('wagner', 'wagner@gmail.com', '2019-09-11', 'site horrivel'),
('awdawdawd', 'awdadadwda@gmail.com', '2019-09-11', 'Ã§asjdhlsdfhsaiodpaisudhf'),
('Wagner', 'wagnercandido10123@gmail.com', '2019-09-11', 'contratei um dos divulgados por esse site bosta e eles furtaram a minha casa.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` longtext NOT NULL,
  `telefone` text NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `titulo`, `descricao`, `telefone`, `imagem`, `categoria`) VALUES
(18, 'Empresa Bolinha', 'fdfddd', '9000', '0.717424001568037161.jpg', 'empresarial'),
(19, 'Empresa Calango', 'fddfddf', '9000', '0.563955001568037271.jpg', 'empresarial'),
(20, 'Empresa Calanguinho ', 'dfffgfgfd', '9000', '0.494851001568037296.jpg', 'empresarial'),
(21, 'Casa da Dona Joana', 'fdfdsds', '500', '0.103022001568037368.png', 'domestico'),
(27, 'Limpeza domÃ©stica', 'Fazemos todos os tipos de serviÃ§os', '2196474098', '0.679795001568212121.jpg', 'domestico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nivel`, `endereco`, `bairro`, `cidade`, `estado`) VALUES
(8, 'Willian', 'willian.santos0644@gmail.com', '4105731e06f6c7b37ee0b77badef567a', 1, 'Rua B', 'skks', 'fdfddf', 'AC'),
(9, 'Willian', 'willian.santos0645@gmail.com', '4105731e06f6c7b37ee0b77badef567a', 2, 'Rua B', 'skkss', 'dsdsd', 'AC'),
(10, 'wagne', '10@gmail.com', 'f9c8db4196d9e4789bf8cf02f6b79032', 2, '2', '3', 'a', 'AC'),
(11, 'Wagner', '12@gmail.com', 'f9c8db4196d9e4789bf8cf02f6b79032', 1, 'a', 'b', 'c', 'AC');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idcarrinho`,`idproduto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idcarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
