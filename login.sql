-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22/01/2023 às 20:14
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
(1, 'Mano', '51981717498', 'Jonathas', 'Rua Capitao Cruz', 'mano@mano', '0000-00-00', '', 'segunda-feira: 8h<br>terça-feira: 9h<br>quarta-feira: 15h<br>quinta-feira: 17h', '123', ' | Domingo, 22 de Janeiro de 2023 : 0001 - aberto | Domingo, 22 de Janeiro de 2023 : 0002 Pago | Domingo, 22 de Janeiro de 2023 : 003 aberto | Domingo, 22 de Janeiro de 2023 : 0004 pago | Domingo, 22 de Janeiro de 2023 : 005 pago | Domingo, 22 de Janeiro de 2023 : 0006 aberto | Domingo, 22 de Janeiro de 2023 :  | Domingo, 22 de Janeiro de 2023 :  | Domingo, 22 de Janeiro de 2023 : 0098 | <p>Domingo, 22 de Janeiro de 2023 : <br>00010<p>', '0', 'Pagou: R$:10Domingo, 22 de Janeiro de 2023 : ', '0Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', '30', '0', '300'),
(32, 'krika', '5165363187', 'Adão Negro', 'Rua José Luiz, N20', 'krika@krika', '1990-08-19', 'aluno', '<br><br><br>', '123', '[Data da Matrícula: Domingo 22 de Janeiro de 2023] | Domingo, 22 de Janeiro de 2023 : 001 - Aberto | Domingo, 22 de Janeiro de 2023 : 002 - Aberto | Domingo, 22 de Janeiro de 2023 : 003 - Pago | Domingo, 22 de Janeiro de 2023 : 0001 | Domingo, 22 de Janeiro de 2023 : 0002 | Domingo, 22 de Janeiro de 2023 : 0011444 | Domingo, 22 de Janeiro de 2023 : 05555 | Domingo, 22 de Janeiro de 2023 : 0006 | Domingo, 22 de Janeiro de 2023 : 0007 | Domingo, 22 de Janeiro de 2023 : 0008 | Domingo, 22 de Janeiro de 2023 : 0009 | Domingo, 22 de Janeiro de 2023 : 00010 | Domingo, 22 de Janeiro de 2023 : 00111 | Domingo, 22 de Janeiro de 2023 : 0012 | Domingo, 22 de Janeiro de 2023 : 0013 | Domingo, 22 de Janeiro de 2023 : 000014 | Domingo, 22 de Janeiro de 2023 : 0015 | Domingo, 22 de Janeiro de 2023 : 0016 | Domingo, 22 de Janeiro de 2023 : 0007 | <p>Domingo, 22 de Janeiro de 2023 : <br>0018<p>', 'Domingo 22 de Janeiro de 2023', 'Pagou: R$:30Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', 'Pagamento: Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', '30', '150', '450'),
(33, 'Joao', '48299289867', 'Adão Negro', 'Rua Paulito Nunes N89', 'joao@joao', '1990-02-22', 'aluno', 'segunda-feira: 8h<br> <br> <br> ', '123', '[Data da Matrícula: Domingo 22 de Janeiro de 2023] | Domingo, 22 de Janeiro de 2023 : 0001 | Domingo, 22 de Janeiro de 2023 : 0002 | Domingo, 22 de Janeiro de 2023 : 003 | Domingo, 22 de Janeiro de 2023 : 004 | Domingo, 22 de Janeiro de 2023 : 005 | Domingo, 22 de Janeiro de 2023 : 006 | Domingo, 22 de Janeiro de 2023 : 007 | Domingo, 22 de Janeiro de 2023 : 008 | Domingo, 22 de Janeiro de 2023 : 0009 | Domingo, 22 de Janeiro de 2023 :  | Domingo, 22 de Janeiro de 2023 :  | Domingo, 22 de Janeiro de 2023 :  | <p>Domingo, 22 de Janeiro de 2023 : <br>00099<p>', 'Domingo 22 de Janeiro de 2023', 'Pagou: R$:140Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', 'Pagamento: Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', '35', '35', '420'),
(34, 'Eduarda', '31908098', 'Raulinho', 'Rua Edivaldo', 'duda@duda', '1258-01-11', 'aluno', 'quinta-feira: 17h<br> <br> <br> ', '123', '[Data da Matrícula: Domingo 22 de Janeiro de 2023] | Domingo, 22 de Janeiro de 2023 : 0001 | Domingo, 22 de Janeiro de 2023 : 002 | <p>Domingo, 22 de Janeiro de 2023 : <br>0003<p>', 'Domingo 22 de Janeiro de 2023', 'Pagou: R$:70Domingo, 22 de Janeiro de 2023 : ', 'Pagamento: Domingo, 22 de Janeiro de 2023 : Domingo, 22 de Janeiro de 2023 : ', '35', '0', '105');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
