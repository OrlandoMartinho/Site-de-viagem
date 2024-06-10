-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2024 às 21:35
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sme_base_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `enviar_contactos`
--

CREATE DATABASE `sme_base_de_dados`;

USE `sme_base_de_dados`;

CREATE TABLE `enviar_contactos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `enviar_contactos`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitacao_passaporte`
--

CREATE TABLE `solicitacao_passaporte` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `numero_rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pais_destino` varchar(255) NOT NULL,
  `datas_viagem` date NOT NULL,
  `motivo_viagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `solicitacao_passaporte`
--

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `enviar_contactos`
--
ALTER TABLE `enviar_contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `solicitacao_passaporte`
--
ALTER TABLE `solicitacao_passaporte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enviar_contactos`
--
ALTER TABLE `enviar_contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `solicitacao_passaporte`
--
ALTER TABLE `solicitacao_passaporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
