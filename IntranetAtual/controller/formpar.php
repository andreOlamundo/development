<?php

// Incluir as configs / constantes para a conexão do banco de dados
require_once("../model/config/db.php");

// Carregar a classe de registro
require_once("../model/classes/Formpar.php");

// Crie o objeto de registro. Quando este objeto é criado, ele fará todo o material de registro automaticamente
// Portanto, esta única linha que processa todo o processo de registro.
$registration = new Registration();

// Mostram a vista do registo (com o formulário de registo e mensagens / erros)

include("../views/login_in/formurarioPAR.php");


