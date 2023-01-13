-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/01/2023 às 06:26
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
  `matricula` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `fone`, `responsavel`, `endereco`, `email`, `data_nasc`, `tipo`, `agenda`, `senha`, `aulas`, `matricula`) VALUES
(1, 'Mano', '', '', '', 'mano@mano', '0000-00-00', '', 'sabado: 14h<br><br><br>', '123', ' | <p>Domingo, 8 de Janeiro de 2023 : <br>Texto de teste coloração <p>', ''),
(7, 'joão pedro', '', '', '', 'joao@joaopedro', '0000-00-00', 'aluno', 'segunda-feira: 12h<br><br><br>', '0123', '', ''),
(11, 'marcio', '', '', '', 'marcio@marcio', '0000-00-00', 'aluno', 'quinta-feira: 8h<br><br><br>', '123', '', ''),
(12, 'Joao', '', '', '', 'joao@joao', '0000-00-00', 'aluno', 'segunda-feira: 13h<br><br><br>', '123', '', ''),
(13, 'Krika', '', '', '', 'krika@krika', '0000-00-00', 'aluno', 'sexta-feira: 12h<br><br><br>', '123', ' | Sexta-Feira, 6 de Janeiro de 2023 : aula 0001 | Sexta-Feira, 6 de Janeiro de 2023 : aula 0002 | Sexta-Feira, 6 de Janeiro de 2023 : aula 0003 | Sexta-Feira, 6 de Janeiro de 2023 : aula 004 | Sexta-Feira, 6 de Janeiro de 2023 : aula 005 | Sábado, 7 de Janeiro de 2023 : oppppppppppppp | Domingo, 8 de Janeiro de 2023 :  | Domingo, 8 de Janeiro de 2023 :  | Domingo, 8 de Janeiro de 2023 : bootstrap | Domingo, 8 de Janeiro de 2023 :  | <p>Quarta-Feira, 11 de Janeiro de 2023 : <br>aula de hoje<p>', ''),
(14, 'Jorge', '', '', '', 'jorge@jorge', '0000-00-00', 'aluno', 'terça-feira: 13h<br><br><br>', '123', '', ''),
(15, 'Pedro', '', '', '', 'pedro@pedro', '0000-00-00', 'aluno', 'sexta-feira: 7h<br><br><br>', '123', '', ''),
(16, 'Mano Peralta', '', '', '', 'test@test', '0000-00-00', 'professor', 'quinta-feira: 12h<br><br><br>', '123', '', ''),
(17, 'Ana', '', '', '', 'ana@ana', '0000-00-00', 'aluno', 'sexta-feira: 16h<br><br><br>', '123', '', ''),
(18, 'Eduarda', '51981717676', 'Adão', 'Rua Capitao Porfilio', 'duda@duda', '0000-00-00', 'aluno', 'segunda-feira: 12<br><br><br>', '', 'Sem Registro', ''),
(19, 'Raul ', '5165363187', 'Raulinho', 'Rua Ramiro Barcelos', 'raul@raul', '0000-00-00', 'aluno', 'quarta-feira: 13<br><br><br>', '123', 'Matricula: ', ''),
(20, 'Larissa', '517876879', 'Lariane', 'Rua José Luiz, N20', 'lari@lari', '0000-00-00', 'aluno', 'quinta-feira: 8h<br><br><br>', '123', 'Matricula: ', ''),
(21, 'Eduarda', '5165363187', 'Raulinho', 'Rua José Luiz, N20', 'dudda@duda', '0000-00-00', 'aluno', 'segunda-feira: 14<br><br><br>', '123', 'Matricula:<br>Domingo8Janeiro2023', ''),
(22, 'Paulinho', '48299289867', 'Paulito', 'Rua Paulito Nunes N89', 'paulinho@paulinho', '0000-00-00', 'aluno', 'terça-feira: 18<br><br><br>', '123', 'Registros de Atividades', 'Domingo'),
(23, 'Edinei', '31908098', 'Edinelson', 'Rua Edivaldo', 'edinei@edinei', '0000-00-00', 'aluno', 'terça-feira: 8h<br><br><br>', '123', 'Registros de Atividades', 'Domingo8deJaneirode2023'),
(24, 'Tatiane', '25163567641', 'Tatinelson', 'Rua Tatinelson N48', 'tati@tati', '0000-00-00', 'aluno', 'sexta-feira: 14<br><br><br>', '123', 'Registros de Atividades', 'Domingo 8 de Janeiro de 2023'),
(25, 'Omar', '6209090790', 'Omarilson', 'Rua Omar N2998', 'omar@omar', '0000-00-00', 'aluno', 'terça-feira: 13<br><br><br>', '123', 'Data da Matrícula: Domingo 8 de Janeiro de 2023 | Domingo, 8 de Janeiro de 2023 : Atividade de desenvolvimento humano com propósitos pedagógicos utilizando a ludicidade | <p>Domingo, 8 de Janeiro de 2023 : <br>Atividade de desenho ludico que desenvolve o cognitivo do ser humano<p>', 'Domingo 8 de Janeiro de 2023'),
(26, 'Mauricio', '', '', '', 'mauricio@mauricio', '0000-00-00', 'aluno', ' <br> <br> <br> ', '123', 'Data da Matrícula: Domingo 8 de Janeiro de 2023', 'Domingo 8 de Janeiro de 2023'),
(27, 'Narcos', '', '', '', 'narcos@narcos', '0000-00-00', 'aluno', ' <br> <br> <br> ', '123', 'Data da Matrícula: Domingo 8 de Janeiro de 2023 | <p>Domingo, 8 de Janeiro de 2023 : <br>ooooooooooooooooooooooooo1<p>', 'Domingo 8 de Janeiro de 2023'),
(28, 'Salete', '', '', '', 'salete@salete', '0000-00-00', 'aluno', ' <br> <br> <br> ', '123', '[Data da Matrícula: Domingo 8 de Janeiro de 2023]', 'Domingo 8 de Janeiro de 2023'),
(29, 'Vanila', '5198989798', 'Vanilowisk', 'Rua Vanilau', 'vani@vani', '2006-08-29', 'aluno', ' <br> <br> <br> ', '123', '[Data da Matrícula: Terça-Feira 10 de Janeiro de 2023]', 'Terça-Feira 10 de Janeiro de 2023');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
