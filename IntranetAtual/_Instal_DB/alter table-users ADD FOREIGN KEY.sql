ALTER TABLE  `users` ADD FOREIGN KEY (  `cod_depto` ) REFERENCES  `DB_INTRANET`.`departamento` (
`cod_depto`
) ON DELETE RESTRICT ON UPDATE CASCADE ;