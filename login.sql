-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29/12/2022 às 21:53
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
  `email` varchar(140) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `agenda` varchar(150) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `tipo`, `agenda`, `senha`) VALUES
(1, 'Mano', 'mano@mano', '', 'terça-feira: 15h<br><br><br>', '123'),
(7, 'joão pedro', 'joao@joaopedro', 'aluno', 'segunda-feira: 12h<br><br><br>', '0123'),
(11, 'marcio', 'marcio@marcio', 'aluno', 'quinta-feira: 8h<br><br><br>', '123'),
(12, 'Joao', 'joao@joao', 'aluno', 'segunda-feira: 13h<br><br><br>', '123'),
(13, 'Krika', 'krika@krika', 'aluno', 'quarta-feira: 15h<br><br><br>', '123'),
(14, 'Jorge', 'jorge@jorge', 'aluno', 'terça-feira: 13h<br><br><br>', '123'),
(15, 'Pedro', 'pedro@pedro', 'aluno', 'sexta-feira: 7h<br><br><br>', '123'),
(16, 'Mano Peralta', 'test@test', 'professor', 'quinta-feira: 12h<br><br><br>', '123'),
(17, 'Ana', 'ana@ana', 'aluno', 'quarta-feira: 14h<br><br><br>', '123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
