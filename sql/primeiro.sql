-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 18:31
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `primeiro`
--
CREATE DATABASE IF NOT EXISTS `primeiro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `primeiro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contato` bigint(200) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `contato`, `senha`) VALUES
(17, 'larissa', 'larissa@larissa.com', 99999999999, 'lari'),
(18, 'teste', 'testes@teste.com', 9999999999, 'ad'),
(19, 'admin', 'admin@admin.com', 41999056568, 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dono` varchar(500) NOT NULL,
  `dono_contato` bigint(20) NOT NULL,
  `id_emprestador` int(11) NOT NULL,
  `emprestador` varchar(500) NOT NULL,
  `emprestador_contato` bigint(20) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `data_aco` date NOT NULL,
  `data_dev` date NOT NULL,
  `contato` bigint(20) NOT NULL,
  `identificador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `id_user`, `dono`, `dono_contato`, `id_emprestador`, `emprestador`, `emprestador_contato`, `nome`, `data_aco`, `data_dev`, `contato`, `identificador`) VALUES
(44, 19, 'admin', 0, 0, '', 0, 'caderno', '2022-11-28', '2022-11-29', 0, 0),
(45, 19, 'admin', 0, 0, '', 0, 'caderno', '2020-02-20', '2020-02-20', 0, 0),
(46, 19, 'admin', 0, 0, '', 0, 'caderno', '2020-02-20', '2020-02-20', 0, 0),
(47, 19, 'admin', 41999056568, 17, 'larissa', 99999999999, 'caderno', '2020-02-20', '2020-02-20', 41999056568, 1),
(48, 19, 'admin', 41999056568, 0, '', 0, 'caderno', '2020-02-20', '2020-02-20', 41999056568, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
