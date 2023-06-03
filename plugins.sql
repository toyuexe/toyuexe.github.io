-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql210.epizy.com
-- Tempo de geração: 03/06/2023 às 01:20
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_33860495_tests`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `plugins`
--

CREATE TABLE `plugins` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `version` varchar(200) NOT NULL,
  `valor` tinyint(1) NOT NULL,
  `descc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `plugins`
--

INSERT INTO `plugins` (`id`, `nome`, `preco`, `url`, `version`, `valor`, `descc`) VALUES
(24, 'FuriousSkyWars', 'Pago', 'https://discord.com/channels/1107774602840653944/1107787290836750336', '1.6', 0, 'test'),
(25, 'FuriousClans', 'Pago', 'https://discord.com/channels/1107774602840653944/1107787179444408320', '1.1', 6, 'test\r\n\r\ntest\r\n\r\ntest\r\n\r\ntest\r\n\r\ntest\r\n\r\ntest');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `plugins`
--
ALTER TABLE `plugins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `plugins`
--
ALTER TABLE `plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
