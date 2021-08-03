CREATE TABLE IF NOT EXISTS `sdb_intranet`.`formpar` (
  `par_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'índice exclusivo',
  `cod_depto` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamento',
  `rf8_dj` varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Descrição / Justificativa',
  `rf6_ativofixo` char(1) COLLATE utf8_general_ci NOT NULL COMMENT 'Ativo Fixo,',
  `rf5_poa` char(1) COLLATE utf8_general_ci NOT NULL COMMENT 'Previsão no orçamento Anual',
  `rf1_data_atual`varchar(20) COLLATE utf8_general_ci NOT NULL COMMENT 'Data do Cadastro',
  `rf3_numero_par`int(11) COLLATE utf8_general_ci NOT NULL COMMENT 'Numero do PAR',
  `rf9_redp`varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Retornos Estimados do Projeto',
  `rf10_valor_total`float(15) COLLATE utf8_general_ci NOT NULL COMMENT 'Valor total do PAR',
  `user`varchar(24) COLLATE utf8_general_ci NOT NULL COMMENT 'Usuário Conectado',
   PRIMARY KEY (`par_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados do PAR';
