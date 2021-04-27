-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/04/2021 às 23:00
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 8.0.3

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
-- Estrutura para tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
  `curso_id` int(11) NOT NULL,
  `curso_nome` varchar(128) NOT NULL,
  `curso_horario` time NOT NULL,
  `curso_horario_fim` time NOT NULL,
  `curso_professor_foto` varchar(256) NOT NULL,
  `curso_descricao` varchar(1024) NOT NULL,
  `curso_professor` varchar(128) NOT NULL,
  `curso_capa` varchar(256) NOT NULL,
  `curso_vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`curso_id`, `curso_nome`, `curso_horario`, `curso_horario_fim`, `curso_professor_foto`, `curso_descricao`, `curso_professor`, `curso_capa`, `curso_vagas`) VALUES
(17, 'Desenvolvimento de Sistemas', '19:00:00', '22:50:00', '1619556263_949a1967edb7607d3edb.jpg', '				\r\n                            O TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS é o profissional que analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação específica. Modela, implementa e mantém bancos de dados.', 'Caio Malheiros', '1619556263_b4f85df9e6a3f5984520.jpg', 40),
(18, 'Modular Recursos Humanos', '19:00:00', '22:50:00', '1619556548_7a00e27b2d97815af7d7.jpeg', '				\r\n                            O TÉCNICO EM RECURSOS HUMANOS é o profissional que detém aptidão para intermediar as relações interpessoais e éticas de uma organização. É habilitado para trabalhar na execução das rotinas administrativas de pessoal com base na Legislação Trabalhista e Previdenciária. Auxilia no controle e avaliação de subsistemas de gerenciamento e contribui para a implementação das estratégias organizacionais. Compromete-se com o desenvolvimento humano, administra pessoal, promove ações de treinamento, identifica e sugere plano de benefícios. Descreve e classifica postos de trabalho, aplica questionários e processa informações acerca dos trabalhadores. Atua nos processos de recrutamento, seleção e integração, assessora as relações de trabalho e sistemas de avaliação de desempenho.', 'Luzia', '1619556548_2d2cdc1eb3193340de5a.png', 40),
(19, 'Administração - Integrado ao Ensino Médio', '12:00:00', '18:50:00', '1619556730_e418bb8d1d8fab73007d.jpg', '				\r\n                            O TÉCNICO EM ADMINISTRAÇÃO é o profissional que adota postura ética na execução da rotina administrativa, na elaboração do planejamento da produção e materiais, recursos humanos, financeiros e mercadológicos. Realiza atividades de controle e auxilia nos processos de direção, utilizando ferramentas da informática. Fomenta ideias e práticas empreendedoras. Desempenha suas atividades observando as normas de segurança, saúde e higiene do trabalho, bem como as de preservação ambiental.\r\n\r\n', 'Fernando', '1619556730_bbc239bcf950441a87c8.png', 40);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `eventos_id` int(11) NOT NULL,
  `eventos_local` varchar(128) NOT NULL,
  `eventos_titulo` varchar(128) NOT NULL,
  `eventos_data` date NOT NULL,
  `eventos_informacoes` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`eventos_id`, `eventos_local`, `eventos_titulo`, `eventos_data`, `eventos_informacoes`) VALUES
(17, 'Etec Ermelinda', 'PRIMEIRO REMAKE SITE DA ETEC', '2021-04-20', '				\r\n   PRIMEIRO REMAKE                         ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `imagem_id` int(11) NOT NULL,
  `imagem_nome` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`imagem_id`, `imagem_nome`) VALUES
(10, 'wp6350578.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `login_nome` varchar(256) NOT NULL,
  `login_email` varchar(128) NOT NULL,
  `login_senha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_nome`, `login_email`, `login_senha`) VALUES
(1, '', 'root@gmail.com', 'root'),
(2, 'José Adauto', 'joseadauto923@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_parceiros`
--

CREATE TABLE `tb_parceiros` (
  `parceiro_id` int(11) NOT NULL,
  `parceiro_nome` varchar(128) NOT NULL,
  `parceiro_foto` varchar(256) NOT NULL,
  `parceiro_descricao` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_parceiros`
--

INSERT INTO `tb_parceiros` (`parceiro_id`, `parceiro_nome`, `parceiro_foto`, `parceiro_descricao`) VALUES
(3, 'TEts', '1619533098_8126575534f6a4fe7473.jpg', '				\r\n                            Programacao');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- Índices de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`eventos_id`);

--
-- Índices de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`imagem_id`);

--
-- Índices de tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Índices de tabela `tb_parceiros`
--
ALTER TABLE `tb_parceiros`
  ADD PRIMARY KEY (`parceiro_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `eventos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `imagem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_parceiros`
--
ALTER TABLE `tb_parceiros`
  MODIFY `parceiro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
