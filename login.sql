-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/03/2023 às 15:52
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
  `divida_paga` varchar(20) NOT NULL,
  `reg_aula` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `fone`, `responsavel`, `endereco`, `email`, `data_nasc`, `tipo`, `agenda`, `senha`, `aulas`, `matricula`, `financeiro_aberto`, `financeiro_pago`, `valor_aula`, `divida_ativa`, `divida_paga`, `reg_aula`) VALUES
(1, 'Jonathas Martinelli Peralta', '51981717498', 'Jonathas', 'Rua Capitao Cruz', 'mano@mano', '0000-00-00', '', 'terça-feira: 14h<br><br><br>', '123', '. | Quarta-Feira, 25 de Janeiro de 2023 : aberto | Quinta-Feira, 26 de Janeiro de 2023 : 0000001 | Quinta-Feira, 26 de Janeiro de 2023 : 0002222 | Quinta-Feira, 26 de Janeiro de 2023 : 0003333 | Quinta-Feira, 2 de Fevereiro de 2023 : ljkknlxcfg | Quinta-Feira, 2 de Fevereiro de 2023 : sdfgfdfg | <p>Sexta-Feira, 3 de Fevereiro de 2023 : <br>Letras móveis <p>', '0', 'Pagou: R$:50Sexta-Feira, 3 de Fevereiro de 2023 : ', ' Quarta-Feira, 25 de Janeiro de 2023 : 40Quinta-Feira, 26 de Janeiro de 2023 : 120Quinta-Feira, 26 de Janeiro de 2023 : 160Quinta-Feira, 26 de Janeiro de 2023 : 160Quinta-Feira, 26 de Janeiro de 2023 : 215Quinta-Feira, 2 de Fevereiro de 2023 : 240Sexta-Feira, 3 de Fevereiro de 2023 : 290', '40', '-10', '290', 'Registro da aula teste whatsapp'),
(37, 'Cristiana Regina Modzelan', '51983330238', 'Cristiana', 'Rua Capitao Cruz, 2801', 'cris@cris', '1990-08-19', 'professor', 'segunda-feira: 8h<br><br><br>', '123', '[Data da Matrícula: Sexta-Feira 3 de Fevereiro de 2023] | Sexta-Feira, 3 de Fevereiro de 2023 : Teste de registro e envio para whatsapp | Sexta-Feira, 3 de Fevereiro de 2023 : TESTE DE REGISTRO DO WHATSAPP AULA 002 | <p>Quarta-Feira, 22 de Fevereiro de 2023 : <br>merda<p>', 'Sexta-Feira 3 de Fevereiro de 2023', 'Pagou: R$:35Quarta-Feira, 22 de Fevereiro de 2023 : ', '0Sábado, 4 de Fevereiro de 2023 : 105Quarta-Feira, 22 de Fevereiro de 2023 : 140', '35', '0', '140', 'merda');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
