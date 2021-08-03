-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Jun-2018 às 11:14
-- Versão do servidor: 5.5.47
-- versão do PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `DB_INTRANET`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing user_id de cada usuário, índice exclusivo',
  `user_name` varchar(64) NOT NULL COMMENT 'Nome do usuário, exclusivo',
  `user_password_hash` varchar(255) NOT NULL COMMENT 'Senha do usuário em formato criptografado hash',
  `user_sobrenome` varchar(64) NOT NULL COMMENT 'sobrenome do usuário,',
  `user_email` varchar(64) NOT NULL COMMENT 'E-mail do usuário, exclusivo',
  `cod_depto` varchar(64) NOT NULL COMMENT 'Departamento do usuário',
  `cod_cargo` varchar(64) NOT NULL COMMENT 'Cargo do usuário',
  `user_ramal` varchar(4) NOT NULL COMMENT 'ramal do usuário',
  `user_firstname` varchar(64) NOT NULL COMMENT 'Nome do usuário',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='dados dos usuarios' AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_sobrenome`, `user_email`, `cod_depto`, `cod_cargo`, `user_ramal`, `user_firstname`) VALUES
(7, 'adenilson.sanrio', '$2y$10$GbjrZAUFr5HwXhoyJdo1VOPobxGQLs2HU/2cp/VrpOd5uQYBvgITC', 'Giovanini', 'adenilson.giovanini@sanrio.com.br', 'CONTABILIDADE', 'COORDENADOR(a) CONTÁBIL', '5176', 'Adenilson'),
(8, 'wgrecco.sanrio', '$2y$10$T6XHOxtHPMg3CCgNmndSUu0vbXbRT.1O46pXIVJP13hiEdzzat4eG', 'Grecco', 'wgrecco@sanrio.com.br', 'CONTABILIDADE', 'GERENTE CONTÁBIL', '5174', 'Alexandre'),
(9, 'aletaguti.sanrio', '$2y$10$xpXWwtp6VzyZA7BGDJAkxuL7cKsbbIq4EduYS9BGQ6XD41gMX2972', 'Taguti', 'juridico@sanrio.com.br', 'JURÍDICO', 'ADVOGADO(a)', '5173', 'Alexandre'),
(10, 'alinenascimento.sanrio', '$2y$10$dAG1JMsqjDy6sRqJTq4mE.5fNdE7JJr7/a/UpzG9FYtNX3GS8t6lS', 'Nascimento', 'aline.silva@sanrio.com.br', 'CONTABILIDADE', 'ASSISTENTE CONTÁBIL', '5177', 'Aline'),
(11, 'alinetiemi.sanrio', '$2y$10$Qfoky3vZcoxPgUpHq/JWAuYIQduguWJWeb8uSx7HS2pr1VXeekmMW', 'Tiemi', 'aline.tiemi@sanrio.com.br', 'CREATIVE DEPARTMENT', 'DESIGNER SÊNIOR', '5159', 'Aline'),
(12, 'andre.sanrio', '$2y$10$ldFLW55oXsq2b3MrIPB3eetD3WOjP0I5M7oJIxrNrldiZJ12kkyNm', 'Nascimento', 'andre.nascimento@sanrio.com.br', 'TI', 'AUXILIAR DE SUPORTE EM TI', '5190', 'André'),
(13, 'carolina.sanrio', '$2y$10$vJ6e/uKEIkWoOHh3awUoVeJZzqYtErkdiFVybT8sBcAmUxuPUAY9m', 'Ribeiro', 'carolina.ribeiro@sanrio.com.br', 'CREATIVE DEPARTMENT', 'DESIGNER GRAFICO', '5157', 'Carolina'),
(14, 'caroline.sanrio', '$2y$10$RlhJ6iavkxAdB2JIfZvKx.QG0zK/X5GXQ0dhHbczHOYCgy4C300DG', 'Manha', 'caroline.manha@sanrio.com.br', 'LICENSING BRASIL', 'EXECUTIVO(a) DE CONTAS SÊNIOR BRASIL', '5187', 'Caroline'),
(15, 'cdaniels.sanrio', '$2y$10$E9JfqY52qObqspg0oP.ikuc2iLSy9tFBmlCFITnbNtmxTw5A9MV2G', 'Daniels', 'cdaniels@sanrio.com', 'SENIOR MANAGEMENT', 'PRESIDENTE', '5155', 'Chris'),
(16, 'claudia.sanrio', '$2y$10$fNtJYHnRrhDtGMHDZo7q0.PHmQnaNO7MYss6VyZwNzSq2/dyCsm6y', 'Nascimento', 'claudia.nascimento@sanrio.com.br', 'MARKETING', 'ASSISTENTE DE MARKETING', '5188', 'Claudia'),
(17, 'fernanda.sanrio', '$2y$10$0.JNOCvKE/ihhWsey2dhMuQflSnFw.B6IhV61IUM3jNJyBQT9q/CK', 'Ota', 'fernanda.ota@sanrio.com.br', 'CREATIVE DEPARTMENT', 'DESIGNER GRAFICO JR', '5158', 'Fernanda'),
(18, 'fernando.sanrio', '$2y$10$GpUq4cplmF6uzruq6zVSce52yHX5hGkPcjSjLuXzMDkDAD22q2tdS', 'Metolina', 'fernando.metolina@sanrio.com.br', 'CREATIVE DEPARTMENT', 'DESIGNER COORDINATOR', '5161', 'Fernando'),
(19, 'monica.sanrio', '$2y$10$A8k/MdfceTA5p2ZePZoX9eKEsDgY7Ar1Ssrr7BWMAsUmCQFvm5Ole', 'Joseph', 'monica.joseph@sanrio.com.br', 'LICENSING BRASIL', 'GERENTE COMERCIAL BRASIL', '5154', 'Monica'),
(20, 'glaucianeves.sanrio', '$2y$10$yW4.aTqxIO6vBQXUzspYz.8d3ubphdd.LNK6DjkhbQalX4JGKle6S', 'Neves', 'glaucia.neves@sanrio.com.br', 'FINANCEIRO', 'ANALISTA FINANCEIRO', '5178', 'Glaucia'),
(21, 'glauciateixeira.sanrio', '$2y$10$nEjxQ1Ays51tAKupwTfsv.QDCEXFuCLAdYf0LLbPQojDWv3UhTRCq', 'Teixeira', 'glaucia.teixeira@sanrio.com.br', 'RH', 'COORDENADOR(a) DE RH', '5164', 'Glaucia'),
(22, 'jackeline.sanrio', '$2y$10$2ku7oTIhPtGK2rjHBbVZ2u/e/ZO3eyckBpuxsk16wnban1a1bORSq', 'Hickman', 'jackeline.hickman@sanrio.com.br', 'MARKETING', 'ANALISTA DE MARKETING', '5171', 'Jackeline'),
(23, 'janfer.sanrio', '$2y$10$SkVqL1LFLEem/WveLGKLHuCk/kaSoLzTrOPrfv.j/SX8dpuD7e10a', 'Gelain', 'ti@sanrio.com.br', 'TI', 'COORDENADOR(a) DE TI', '5189', 'Janfer'),
(24, 'jessica.sanrio', '$2y$10$wxJwAERjT86VHJVJeV70ZOhHfMIOKA3tIsiaOGtJtnjm4HBlwqGp2', 'Santana', 'jessica.santana@sanrio.com.br', 'JURÍDICO', 'OTHERS', '5167', 'Jéssica'),
(25, 'jp.sanrio', '$2y$10$4kYTaTMtomRBHHMGE2P7Buydrj5NO6YA1WBQu.YBCJS60m/MWScMK', 'Paulo', 'joao.paulo@sanrio.com.br', 'LICENSING LATAM', 'GERENTE COMERCIAL LATAN', '5168', 'João'),
(26, 'kaio.sanrio', '$2y$10$.3N8ZpgRe6nCg.2ZFC/zKePkic4P75UFIBR6X4E39/wVM7IRP7KVy', 'Aramaqui', 'kaio.aramaqui@sanrio.com.br', 'CONTABILIDADE', 'ADVOGADO(a)', '5186', 'Kaio'),
(27, 'lilian.sanrio', '$2y$10$ynaE8y1c6Lgk4pIzAW/5IujfCJdWGrSW9njpoP7KWRu9qBYADlhNK', 'Cristina', 'lilian.cristina@sanrio.com.br', 'RH', 'AUXILIAR DE RH', '5181', 'Lilian'),
(28, 'lucelane.sanrio', '$2y$10$35noiEniz4Ig.aVNz2cNnukpZPXx8xTKUuWKp/MhCxvgViDAYPjc.', 'Vieira', 'lucelane.vieira@sanrio.com.br', 'CONTABILIDADE', 'ANALISTA FISCAL JR', '5180', 'Lucelane'),
(29, 'jennifer.sanrio', '$2y$10$PPwQZkWVqLv4T1E6fXih7uVYbaRdMpL7w8ODK6at6K.42LVk4bGzK', 'Romero', 'jennifer.romero@sanrio.com.br', 'LICENSING LATAM', 'ANALISTA COMERCIAL LATAN', '5184', 'Jennifer'),
(30, 'paula.sanrio', '$2y$10$BAy533XaTvLb3.7PcIm/DOE.4xJiEpnQHNBgytV21aWvzjITGRjgC', 'Nascimento', 'paula.nascimento@sanrio.com.br', 'CREATIVE DEPARTMENT', 'DESIGNER GRAFICO JR', '5160', 'Paula'),
(31, 'rafael.sanrio', '$2y$10$L6eFMBv6W.rpV4S0hphEFeon9Qs926bJrgEbjiVsvDqiKOE2vFCa.', 'Rissatto', 'rafael.rissatto@sanrio.com.br', 'MARKETING', 'ANALISTA DE MARKETING DIGITAL', '5172', 'Rafael'),
(32, 'renata.sanrio', '$2y$10$DBoEybYh112c9hF2TREDMOqGwh6sc2Fnnn3c4KdW6IBDtvmE5NXgW', 'Pereto', 'renata.pereto@sanrio.com.br', 'MARKETING', 'GERENTE DE MARKETING', '5170', 'Renata'),
(33, 'ricardo.sanrio', '$2y$10$hSAXHBPlsIrCil8Abooa4uUnr8DaGGQv0sRnwAKzoiWdeO9fpimf2', 'Torres', 'ricardo.torres@sanrio.com.br', 'FINANCEIRO', 'ANALISTA FINANCEIRO', '5175', 'Ricardo'),
(34, 'tattiane.sanrio', '$2y$10$qJm1utxzYX1cPsfYBrKKmePoxlQZZ2MwKjMgMUhAHSHSgL2dSGmEG', 'Santos', 'tattiane.mrsantos@sanrio.com.br', 'FINANCEIRO', 'ANALISTA FINANCEIRO', '5179', 'Tattiane');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
