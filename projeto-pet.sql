-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2024 às 20:29
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciar`
--

CREATE TABLE `anunciar` (
  `id_pet` int(100) NOT NULL,
  `nome_pet` varchar(100) NOT NULL,
  `idade_pet` varchar(100) NOT NULL,
  `nome_contato` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `cidade` text NOT NULL,
  `uf` text NOT NULL,
  `cep` int(9) NOT NULL,
  `sobre` text NOT NULL,
  `validar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anunciar`
--

INSERT INTO `anunciar` (`id_pet`, `nome_pet`, `idade_pet`, `nome_contato`, `telefone`, `email`, `cidade`, `uf`, `cep`, `sobre`, `validar`) VALUES
(1, 'Fred', '1', 'Maria', 2147483647, 'maria@gmail.com', 'Rincão', 'SP', 14832150, 'Fred é um cãozinho...', 0),
(2, 'Fred', '1 ano', 'Maria', 2147483647, 'maria@gmail.com', 'Rincão', 'SP', 14832150, 'teste', 0),
(3, 'Luna', '5 meses', 'Maria', 2147483647, 'maria@gmail.com', 'Rincão', 'SP', 14832150, 'Luna é uma gatinha...', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `confirma_senha` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `confirma_senha`, `cep`, `rua`, `bairro`, `numero`, `cidade`, `uf`) VALUES
(1, 'Maria Clara', 'maria@gmail.com', '1234', '1234', '14832150', 'Avenida Reinaldo Izique', 'Vila Ferroviária', '4', 'Rincão', 'SP'),
(2, 'Maria Clara', 'maria@gmail.com', '1234', '1234', '14832150', 'Avenida Reinaldo Izique', 'Vila Ferroviária', '4', 'Rincão', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `id_denuncia` int(100) NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dat` date NOT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 NOT NULL,
  `validar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`id_denuncia`, `titulo`, `dat`, `descricao`, `validar`) VALUES
(6, 'teste', '2024-09-04', 'testeeee', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anunciar`
--
ALTER TABLE `anunciar`
  ADD PRIMARY KEY (`id_pet`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id_denuncia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anunciar`
--
ALTER TABLE `anunciar`
  MODIFY `id_pet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id_denuncia` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
