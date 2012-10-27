-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 27, 2012 as 03:55 PM
-- Versão do Servidor: 5.1.53
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `eaot2013`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `notaPortugues` int(11) NOT NULL,
  `notaEspecifica` int(11) NOT NULL,
  `mediaParcial` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`codigo`, `especialidade`, `nome`, `notaPortugues`, `notaEspecifica`, `mediaParcial`, `email`, `localidade`) VALUES
(1, 'JOR', 'CAA', 23, 12, 52.2222, 'a@a.com', 'SP'),
(2, 'EST', 'ASW', 21, 20, 67.7778, 'a@d.com', 'RJ'),
(3, 'CCO', 'ASD', 12, 15, 46.6667, 'a@gol.com', 'BA'),
(4, 'ASS', 'QWE', 23, 20, 70, 'asd@fml.com', 'MS'),
(5, 'ANS', 'CBL', 23, 12, 52.2222, 'as@bol.com.br', 'PE'),
(6, 'ANS', 'ASD', 23, 12, 52.2222, 'a@df.com', 'SP'),
(7, 'EST', 'ASRT', 12, 12, 40, 'a@x.com', 'PA'),
(8, 'ASS', 'SDW', 12, 27, 73.3333, 'clei@dom.com', 'PA'),
(9, 'EST', 'SDE', 25, 30, 94.4444, 'a@d.com', 'PA'),
(10, 'ANS', 'SDE', 23, 30, 92.2222, 'a@d.com', 'MS'),
(11, 'ANS', 'ERT', 23, 23, 76.6667, 'a@d.com', 'AM'),
(12, 'ANS', 'SDF', 23, 23, 76.6667, 'a@d.com', 'ES'),
(13, 'ADM', 'ASD', 12, 23, 64.4444, 'a@s.com', 'DF'),
(14, 'ANS', 'SER', 22, 21, 76.6667, 'a@d.com', 'AM'),
(15, 'ADM', 'ASD', 12, 23, 64.4444, 'a@w.vom', 'DF'),
(16, 'REP', 'BONO', 23, 23, 76.6667, 'a@c.com', 'SC');
