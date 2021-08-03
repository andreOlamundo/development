CREATE TABLE IF NOT EXISTS `DB_INTRANET`.`departamento` (
`cod_depto` varchar(11) NOT NULL COMMENT 'índice exclusivo',
`nome_depto` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamentos',
CONSTRAINT   PK_DEPARTAMENTO 
PRIMARY KEY (`cod_depto`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados dos usuarios';