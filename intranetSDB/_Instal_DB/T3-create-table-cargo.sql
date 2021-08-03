CREATE TABLE IF NOT EXISTS `DB_INTRANET`.`cargo` (
`cod_cargo` varchar(11) NOT NULL COMMENT 'fk_cod_depto',
`cod_depto` varchar(11) NOT NULL COMMENT 'FOREIGN KEY',
`nome_cargo` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'CARGOS DISPONÍVEIS',
CONSTRAINT   PK_DEPARTAMENTO 
PRIMARY KEY (`cod_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';