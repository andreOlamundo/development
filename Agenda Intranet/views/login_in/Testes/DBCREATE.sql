CREATE TABLE IF NOT EXISTS `db_mtw`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing user_id de cada usuário, índice exclusivo',
  `user_name` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Nome do usuário, exclusivo',
  `user_lastname` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'sobrenome do usuário',
  `user_email` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'E-mail do usuário, exclusivo',
  `user_depart`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamento do usuário',
  `user_ramal`varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'ramal do usuário',
  `user_password_hash` varchar(255) COLLATE utf8_general_ci NOT NULL COMMENT 'Senha do usuário em formato criptografado hash',
  `nivel` INT(1) UNSIGNED NOT NULL  COMMENT 'Nível de acesso',

  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_ramal` (`user_ramal`),

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';
