<?php


// Aqui ele pega o valor da varíavel do navegador.
$cod = $_GET['cod'];

// A condição switch faz com que o valor dos códigos do primeiro script represente uma página html que carregará na div conteudo.
switch($cod){
case '1'; // Aqui por exemplo, lá é page.php?cod=1, certo? Então ela vai carregar a página home.html na div conteúdo.
include('dashboard/views/login_out/institucional.php');
break;
case '2'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/formulario.html');
break;
case '4'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/politicasProcedimentos.html');
break;
case '5'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/table_list.php');
break;
case '6'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/agenda.html');
break;
case '7'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/utilidades.html');
break;
case '8'; // Aqui tambem, lá é page.php?cod=2, então ela carregará a página de noticias.html.
include('dashboard/views/login_out/galeria.php');

}


?>
