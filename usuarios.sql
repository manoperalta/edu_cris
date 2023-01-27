-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/01/2023 às 04:00
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `responsavel` varchar(140) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(140) NOT NULL,
  `data_nasc` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `agenda` varchar(150) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `aulas` longtext NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `financeiro_aberto` varchar(500) NOT NULL,
  `financeiro_pago` varchar(500) NOT NULL,
  `valor_aula` varchar(20) NOT NULL,
  `divida_ativa` varchar(20) NOT NULL,
  `divida_paga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `fone`, `responsavel`, `endereco`, `email`, `data_nasc`, `tipo`, `agenda`, `senha`, `aulas`, `matricula`, `financeiro_aberto`, `financeiro_pago`, `valor_aula`, `divida_ativa`, `divida_paga`) VALUES
(1, 'Mano', '51981717498', 'Jonathas', 'Rua Capitao Cruz', 'mano@mano', '0000-00-00', '', 'terça-feira: 14h<br><br><br>', '123', '. | Quarta-Feira, 25 de Janeiro de 2023 : aberto | Quinta-Feira, 26 de Janeiro de 2023 : 0000001 | Quinta-Feira, 26 de Janeiro de 2023 : 0002222 | <p>Quinta-Feira, 26 de Janeiro de 2023 : <br>0003333<p>', '0', 'Pagou: R$:55Quinta-Feira, 26 de Janeiro de 2023 : ', ' Quarta-Feira, 25 de Janeiro de 2023 : 40Quinta-Feira, 26 de Janeiro de 2023 : 120Quinta-Feira, 26 de Janeiro de 2023 : 160Quinta-Feira, 26 de Janeiro de 2023 : 160Quinta-Feira, 26 de Janeiro de 2023 : 215', '40', '-55', '215');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
