-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 02-Maio-2016 às 12:15
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bikes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `integrantes`
--

CREATE TABLE IF NOT EXISTS `integrantes` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `foto_pessoa` varchar(80) NOT NULL,
  `foto1_bike` varchar(80) NOT NULL,
  `foto2_bike` varchar(80) NOT NULL,
  `foto3_bike` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `integrantes`
--

INSERT INTO `integrantes` (`codigo`, `nome`, `foto_pessoa`, `foto1_bike`, `foto2_bike`, `foto3_bike`) VALUES
(1, 'Fernando', 'Imagens/foto1_pessoa', 'Imagens/1_foto1_bike.jpg', 'Imagens/1_foto2_bike.jpg', ''),
(2, 'Mac', 'Imagens/foto2_pessoa.jpg', 'Imagens/2_foto1_bike.jpg', 'Imagens/2_foto2_bike.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
