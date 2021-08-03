CREATE TABLE IF NOT EXISTS `DB_INTRANET`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing user_id de cada usuário, índice exclusivo',
  `user_name` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário, exclusivo',
  `user_password_hash` varchar(255) COLLATE utf8_general_ci NOT NULL COMMENT 'Senha do usuário em formato criptografado hash',
  `user_sobrenome` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'sobrenome do usuário,',
  `user_email` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'E-mail do usuário, exclusivo',
  `cod_depto`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamento do usuário',
  `cod_cargo`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Cargo do usuário',
  `user_ramal`varchar(4) COLLATE utf8_general_ci NOT NULL COMMENT 'ramal do usuário',
  `user_namecolab`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';
