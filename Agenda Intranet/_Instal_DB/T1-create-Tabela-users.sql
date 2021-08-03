CREATE TABLE IF NOT EXISTS `sdb_intranet`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing user_id de cada usuário, índice exclusivo',
  `user_name` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário, exclusivo',
  `user_password_hash` varchar(255) COLLATE utf8_general_ci NOT NULL COMMENT 'Senha do usuário em formato criptografado hash',
  `user_email` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'E-mail do usuário, exclusivo',
  `cod_depto`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Codigo do Depto.',
  `nome_depto` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamentos',
  `cod_cargo`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Codigo do Cargo',
  `nome_cargo` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Cargos disponíveis',
  `user_ramal`varchar(4) COLLATE utf8_general_ci NOT NULL COMMENT 'ramal do usuário',
  `user_firstname`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário',
  `user_lastname` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Sobrenome do Usuário,',
  `user_staff` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Funcionários,',
  `user_manager` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Gerência,',
  `user_teller` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Contas a Pagar,',
  `user_admin` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Administrador,',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';
