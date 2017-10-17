-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Ago-2017 às 19:32
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_registros`
--
CREATE DATABASE IF NOT EXISTS `db_registros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_registros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cgm` int(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `turma` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cgm`, `curso`, `turma`, `id`, `idpessoa`) VALUES
(448807959, 'Informatica', '4A', 15, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunozz`
--

CREATE TABLE `alunozz` (
  `id_aluno` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cgm` varchar(30) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turma` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `alunozz`
--

INSERT INTO `alunozz` (`id_aluno`, `nome`, `nascimento`, `rg`, `cgm`, `curso`, `turma`, `email`, `senha`) VALUES
(1, 'Vinícius', '24/06/1999', '12.584.317-4', '889409126', 'Informatica', '4 ano', 'vinistanoga@gmail.com', 123),
(2, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 123),
(3, 'Maria', '18/06/1999', '12121212', '121212', 'Informatica', '4 ano', 'maria@hotmail.com', 123),
(4, 'Andre', '20/04/1980', '131954921', '448807959', 'Eletronica', '4a', 'jandrey@jandrey', 123),
(6, 'Luan Teste', '05/03/1999', '131954921', '448807959', 'Informatica', '4A', 'luanrohde11@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`) VALUES
(1, 'Informatica'),
(2, 'Administracao'),
(3, 'Eletronica'),
(4, 'MEio Ambiente'),
(5, 'Enfermagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `carga_horaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome`, `professor`, `curso`, `carga_horaria`) VALUES
(1, 'Matematica', 'Silvano', 'Informatica', '1010'),
(2, 'WEB', 'Jandrey', 'Informatica', '18h'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `cargo`, `cpf`, `idpessoa`) VALUES
(4, '3', '534534', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionariozz`
--

CREATE TABLE `funcionariozz` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `funcionariozz`
--

INSERT INTO `funcionariozz` (`id_funcionario`, `nome`, `nascimento`, `rg`, `cpf`, `cargo`, `email`, `senha`) VALUES
(1, 'Vinicius', '24/06/1999', '12.584.317-4', '069.368.299-02', 'Prof', 'vinicius@email.com', 123),
(2, 'Vinicius', '24/06/1999', '12.584.317-4', '069.368.299-02', 'Prof', 'vinicius@email.com', 123),
(3, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 123),
(4, 'Vinicius', '123', '123', '123', 'professor', 'vini.stanoga', 123),
(5, 'Luan', '1234', '1234', '1234', 'professor', 'luan.rohde', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_aluno`
--

CREATE TABLE `info_aluno` (
  `id_info_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `notas` float NOT NULL,
  `reclamacoes` varchar(255) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `elogios` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `email`, `senha`) VALUES
(1, '', '123'),
(2, '', '123'),
(3, 'teste', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pendente',
  `tipo` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `rg`, `nascimento`, `foto`, `email`, `senha`, `status`, `tipo`, `usuario`) VALUES
(22, 'Jandrey', '4534534', '09/07/1980', '', 'andre.jandrey@ceepcascavel.com.br', '123', 'pendente', 3, ''),
(28, 'Luan Teste', 'trrtertr', 'trtrtrt', '', 'dgdgd@ceepcascavel.com.br', '123', 'pendente', 2, 'dgdgd'),
(30, 'admin', '', '', '', 'admin', 'admin', 'pendente', 1, 'admin'),
(31, 'Luan Rohde', '13.195.492-1', '05/03/1999', '', 'luan.rohde@ceepcascavel.com.br', '123', 'pendente', 2, 'luan.rohde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `ano` int(10) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `data_inicio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `alunozz`
--
ALTER TABLE `alunozz`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `funcionariozz`
--
ALTER TABLE `funcionariozz`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `info_aluno`
--
ALTER TABLE `info_aluno`
  ADD PRIMARY KEY (`id_info_aluno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `alunozz`
--
ALTER TABLE `alunozz`
  MODIFY `id_aluno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionariozz`
--
ALTER TABLE `funcionariozz`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `info_aluno`
--
ALTER TABLE `info_aluno`
  MODIFY `id_info_aluno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`id`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
