-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Dez-2017 às 20:11
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apadrinhe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento_visita`
--

CREATE TABLE `agendamento_visita` (
  `id` int(11) NOT NULL,
  `excluido` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `apadrinhamentos_id` int(11) NOT NULL,
  `apadrinhamentos_padrinho_id` int(11) NOT NULL,
  `apadrinhamentos_afilhado_id` int(11) NOT NULL,
  `ongs_horarios_visitas_id` int(11) NOT NULL,
  `ongs_horarios_visitas_ongs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apadrinhamentos`
--

CREATE TABLE `apadrinhamentos` (
  `id` int(11) NOT NULL,
  `excluido` tinyint(4) DEFAULT '0',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  `apadrinhamentoscol` varchar(45) DEFAULT NULL,
  `padrinho_id` int(11) NOT NULL,
  `afilhado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apadrinhamentos_disponiveis`
--

CREATE TABLE `apadrinhamentos_disponiveis` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `excluido` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pessoas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE `ongs` (
  `id` int(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `nome_fantasia` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `requisitos_apadrinhamento` text,
  `excluido` tinyint(4) DEFAULT '0',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ongs`
--

INSERT INTO `ongs` (`id`, `cnpj`, `nome_fantasia`, `endereco`, `requisitos_apadrinhamento`, `excluido`, `created`, `modified`) VALUES
(1, '11111111111111', 'ONG 1', 'Endereço ON', 'Bla Bla', 0, '2017-12-14 23:33:45', '2017-12-14 23:33:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs_horarios_visitas`
--

CREATE TABLE `ongs_horarios_visitas` (
  `id` int(11) NOT NULL,
  `horario` time NOT NULL,
  `excluido` tinyint(4) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ongs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong_doacoes`
--

CREATE TABLE `ong_doacoes` (
  `id` int(11) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `confirmado` tinyint(4) NOT NULL DEFAULT '0',
  `excluido` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pessoas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `tipo_pessoa` varchar(45) NOT NULL,
  `excluido` tinyint(4) DEFAULT '0',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  `profissao` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `total_pessoas_reside` int(11) NOT NULL DEFAULT '0',
  `endereco` varchar(100) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `nascimento`, `tipo_pessoa`, `excluido`, `created`, `modified`, `profissao`, `estado_civil`, `total_pessoas_reside`, `endereco`, `celular`, `email`, `sexo`) VALUES
(5, 'Rony', '1990-06-05', 'PADRINHO', 0, '2017-12-13 22:41:45', '2017-12-13 22:41:45', 'programador', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(6, 'Nome Gestor', '1994-08-01', 'GESTOR', 0, '2017-12-13 23:53:24', '2017-12-13 23:53:24', 'Fisioterapeura', 'CASADO', 0, 'Rua A', '82999999999', 'rooos@h.com', 'F'),
(7, 'asdad', '1990-06-05', 'PADRINHO', 0, '2017-12-14 00:19:08', '2017-12-14 00:19:08', '234234', 'SOLTEIRO', 0, '23423423', '82988075002', 'ronysilvati@live.com', 'M'),
(8, '234234', '1990-06-05', 'PADRINHO', 0, '2017-12-14 00:20:12', '2017-12-14 00:20:12', '234234', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(9, '23423', '1990-06-05', 'PADRINHO', 0, '2017-12-14 00:27:15', '2017-12-14 00:27:15', '234234', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(10, '23423', '1990-06-05', 'PADRINHO', 0, '2017-12-14 00:28:46', '2017-12-14 00:28:46', '234234', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(11, '23423', '1990-06-05', 'PADRINHO', 0, '2017-12-14 00:29:04', '2017-12-14 00:29:04', '234234', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(12, 'kkkdaskdkad', '1990-06-05', 'PADRINHO', 0, '2017-12-14 22:51:20', '2017-12-14 22:51:20', 'A profissão', 'SOLTEIRO', 0, 'Alameda são benedito', '82988075002', 'ronysilvati@live.com', 'M'),
(13, 'asasdas', '1990-06-05', 'PADRINHO', 0, '2017-12-15 00:15:01', '2017-12-15 00:15:01', 'programador', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(14, 'asdasda', '1990-06-05', 'PADRINHO', 0, '2017-12-15 00:16:46', '2017-12-15 00:16:46', 'programador', 'SOLTEIRO', 0, '23434', '82988075002', 'ronysilvati@live.com', 'M'),
(15, '234234234', '1990-06-05', 'PADRINHO', 0, '2017-12-15 00:20:02', '2017-12-15 00:20:02', 'programador', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(16, '234234234', '1990-06-05', 'PADRINHO', 0, '2017-12-15 00:20:35', '2017-12-15 00:20:35', 'programador', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M'),
(17, 'Sou um novo usuário', '0000-00-00', 'GESTOR', 0, '2017-12-16 16:26:39', '2017-12-16 16:26:39', 'Programador', 'SOLTEIRO', 0, 'Rua barão de alagoas', '82988075002', 'ronysilvati@live.com', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes_apadrinhamento`
--

CREATE TABLE `solicitacoes_apadrinhamento` (
  `id` int(11) NOT NULL,
  `qtd_pessoas_desejo_apadrinhar` int(11) NOT NULL DEFAULT '1',
  `sexo_apadrinhados` varchar(45) NOT NULL,
  `motivo_apadrinhar` varchar(255) NOT NULL,
  `status_solicitacao` varchar(45) NOT NULL,
  `excluido` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pessoas_id` int(11) NOT NULL,
  `ongs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacoes_apadrinhamento`
--

INSERT INTO `solicitacoes_apadrinhamento` (`id`, `qtd_pessoas_desejo_apadrinhar`, `sexo_apadrinhados`, `motivo_apadrinhar`, `status_solicitacao`, `excluido`, `created`, `modified`, `pessoas_id`, `ongs_id`) VALUES
(1, 1, 'M', 'Gostaria de cuidar', 'ANALISE', 0, '2017-12-14 23:44:30', '2017-12-14 23:44:30', 12, 1),
(2, 1, 'M', 'asdasdasd', 'ANALISE', 0, '2017-12-15 00:15:18', '2017-12-15 00:15:18', 13, 1),
(3, 1, 'M', 'Gostaria de cuidar', 'ANALISE', 0, '2017-12-15 00:17:04', '2017-12-15 00:17:04', 14, 1),
(4, 1, 'M', '234234234', 'ANALISE', 0, '2017-12-15 00:20:50', '2017-12-15 00:20:50', 16, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `excluido` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pessoas_id` int(11) NOT NULL,
  `ongs_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `excluido`, `created`, `modified`, `pessoas_id`, `ongs_id`) VALUES
(5, '234234', '23423424', 0, '2017-12-14 23:17:36', '2017-12-14 23:17:36', 12, NULL),
(6, '3333', '333333', 0, '2017-12-14 23:19:32', '2017-12-14 23:19:32', 12, NULL),
(7, '234234', '23434234', 0, '2017-12-15 00:15:08', '2017-12-15 00:15:08', 13, NULL),
(8, '234234', '23423434', 0, '2017-12-15 00:16:57', '2017-12-15 00:16:57', 14, NULL),
(9, '234234234', '23423434', 0, '2017-12-15 00:20:45', '2017-12-15 00:20:45', 16, NULL),
(10, 'laldalsdla', 'kaskdkaskdasd', 0, '2017-12-16 16:26:51', '2017-12-16 16:26:51', 17, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento_visita`
--
ALTER TABLE `agendamento_visita`
  ADD PRIMARY KEY (`id`,`apadrinhamentos_id`,`apadrinhamentos_padrinho_id`,`apadrinhamentos_afilhado_id`,`ongs_horarios_visitas_id`,`ongs_horarios_visitas_ongs_id`),
  ADD KEY `fk_agendamento_visita_apadrinhamentos1_idx` (`apadrinhamentos_id`,`apadrinhamentos_padrinho_id`,`apadrinhamentos_afilhado_id`),
  ADD KEY `fk_agendamento_visita_ongs_horarios_visitas1_idx` (`ongs_horarios_visitas_id`,`ongs_horarios_visitas_ongs_id`);

--
-- Indexes for table `apadrinhamentos`
--
ALTER TABLE `apadrinhamentos`
  ADD PRIMARY KEY (`id`,`padrinho_id`,`afilhado_id`),
  ADD KEY `fk_apadrinhamentos_pessoas1_idx` (`padrinho_id`),
  ADD KEY `fk_apadrinhamentos_pessoas2_idx` (`afilhado_id`);

--
-- Indexes for table `apadrinhamentos_disponiveis`
--
ALTER TABLE `apadrinhamentos_disponiveis`
  ADD PRIMARY KEY (`id`,`pessoas_id`),
  ADD KEY `fk_apadrinhamentos_disponiveis_pessoas1_idx` (`pessoas_id`);

--
-- Indexes for table `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongs_horarios_visitas`
--
ALTER TABLE `ongs_horarios_visitas`
  ADD PRIMARY KEY (`id`,`ongs_id`),
  ADD KEY `fk_ongs_horarios_visitas_ongs1_idx` (`ongs_id`);

--
-- Indexes for table `ong_doacoes`
--
ALTER TABLE `ong_doacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ong_doacoes_pessoas1_idx` (`pessoas_id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitacoes_apadrinhamento`
--
ALTER TABLE `solicitacoes_apadrinhamento`
  ADD PRIMARY KEY (`id`,`pessoas_id`,`ongs_id`),
  ADD KEY `fk_solicitacoes_apadrinhamento_pessoas_idx` (`pessoas_id`),
  ADD KEY `fk_solicitacoes_apadrinhamento_ongs1_idx` (`ongs_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`,`pessoas_id`),
  ADD KEY `fk_usuarios_pessoas1_idx` (`pessoas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento_visita`
--
ALTER TABLE `agendamento_visita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apadrinhamentos`
--
ALTER TABLE `apadrinhamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apadrinhamentos_disponiveis`
--
ALTER TABLE `apadrinhamentos_disponiveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongs_horarios_visitas`
--
ALTER TABLE `ongs_horarios_visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ong_doacoes`
--
ALTER TABLE `ong_doacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `solicitacoes_apadrinhamento`
--
ALTER TABLE `solicitacoes_apadrinhamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamento_visita`
--
ALTER TABLE `agendamento_visita`
  ADD CONSTRAINT `fk_agendamento_visita_apadrinhamentos1` FOREIGN KEY (`apadrinhamentos_id`,`apadrinhamentos_padrinho_id`,`apadrinhamentos_afilhado_id`) REFERENCES `apadrinhamentos` (`id`, `padrinho_id`, `afilhado_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_visita_ongs_horarios_visitas1` FOREIGN KEY (`ongs_horarios_visitas_id`,`ongs_horarios_visitas_ongs_id`) REFERENCES `ongs_horarios_visitas` (`id`, `ongs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `apadrinhamentos`
--
ALTER TABLE `apadrinhamentos`
  ADD CONSTRAINT `fk_apadrinhamentos_pessoas1` FOREIGN KEY (`padrinho_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apadrinhamentos_pessoas2` FOREIGN KEY (`afilhado_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `apadrinhamentos_disponiveis`
--
ALTER TABLE `apadrinhamentos_disponiveis`
  ADD CONSTRAINT `fk_apadrinhamentos_disponiveis_pessoas1` FOREIGN KEY (`pessoas_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ongs_horarios_visitas`
--
ALTER TABLE `ongs_horarios_visitas`
  ADD CONSTRAINT `fk_ongs_horarios_visitas_ongs1` FOREIGN KEY (`ongs_id`) REFERENCES `ongs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ong_doacoes`
--
ALTER TABLE `ong_doacoes`
  ADD CONSTRAINT `fk_ong_doacoes_pessoas1` FOREIGN KEY (`pessoas_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacoes_apadrinhamento`
--
ALTER TABLE `solicitacoes_apadrinhamento`
  ADD CONSTRAINT `fk_solicitacoes_apadrinhamento_ongs1` FOREIGN KEY (`ongs_id`) REFERENCES `ongs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitacoes_apadrinhamento_pessoas` FOREIGN KEY (`pessoas_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_pessoas1` FOREIGN KEY (`pessoas_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
