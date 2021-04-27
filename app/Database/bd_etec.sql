-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Tempo de geração: 14-Abr-2021 às 01:28
-- Versão do servidor: 8.0.23
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_etec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--
create database bd_etec;
use bd_etec;

CREATE TABLE `tb_cursos` (
  `curso_id` int NOT NULL,
  `curso_nome` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `curso_horario` time NOT NULL,
  `curso_horario_fim` time NOT NULL,
  `curso_professor_foto` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `curso_descricao` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  `curso_professor` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `curso_vagas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`curso_id`, `curso_nome`, `curso_horario`, `curso_horario_fim`, `curso_professor_foto`, `curso_descricao`, `curso_professor`, `curso_vagas`) VALUES
(8, 'Caio', '13:33:00', '12:03:00', '1618254073_41379b614bc98be67388.jpg', '				\r\n                            Caio', 'Caio', 40),
(9, 'asdfasd', '04:35:00', '04:54:00', '1618254928_6d0143811e488e2dc5f1.jpg', '				\r\n                    fasdfasdfasdf        ', 'asdfasf', 100),
(10, 'asdfasdfa', '03:42:00', '04:23:00', '1618254943_460702bc42a73b397b69.jpg', '				\r\n                            sdfasdfasdfasd', 'asdfasdf', 10),
(11, 'asdfasdfas', '04:02:00', '04:23:00', '1618254953_56ca54c3d26ff155f3f0.jpeg', '				\r\n                            dfasdfasdfasd', 'asdfasdfa', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id` int NOT NULL,
  `eventos_local` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `eventos_titulo` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `eventos_data` date NOT NULL,
  `eventos_informacoes` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`id`, `eventos_local`, `eventos_titulo`, `eventos_data`, `eventos_informacoes`) VALUES
(17, 'Etec Ermelinda', 'PRIMEIRO REMAKE SITE DA ETEC', '2021-04-20', '				\r\n   PRIMEIRO REMAKE                         ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `imagem_id` int NOT NULL,
  `imagem_nome` varchar(258) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`imagem_id`, `imagem_nome`) VALUES
(6, 'clean-firewatch-styled-wallpaper-1920×1080.png'),
(7, 'kqkfgdpm5og61.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int NOT NULL,
  `login_email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `login_senha` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_email`, `login_senha`) VALUES
(1, 'root@gmail.com', 'root');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parceiros`
--

CREATE TABLE `tb_parceiros` (
  `parceiro_id` int NOT NULL,
  `parceiro_nome` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `parceiro_foto` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `parceiro_descricao` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_parceiros`
--

INSERT INTO `tb_parceiros` (`parceiro_id`, `parceiro_nome`, `parceiro_foto`, `parceiro_descricao`) VALUES
(1, 'Caio', '1618348282_bffe169c9c04f5bdf35f.jpg', '				\r\n                            Caio'),
(2, 'Microsoft', '1618348781_699898c0c269497f838a.png', '				\r\n                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- Índices para tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`imagem_id`);

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Índices para tabela `tb_parceiros`
--
ALTER TABLE `tb_parceiros`
  ADD PRIMARY KEY (`parceiro_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `curso_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `imagem_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_parceiros`
--
ALTER TABLE `tb_parceiros`
  MODIFY `parceiro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
